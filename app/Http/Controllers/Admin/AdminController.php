<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Setting;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Models\Roles;
use App\Models\AdminRole;
use App\Models\Product;
use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{


	public function __construct()
	{

		$this->middleware("auth:admin");
	}


	public function dashboard()
	{
		$tickets = Ticket::with('user')->where('status', 'opened')->get();
		$trendings = Product::where('is_trending', true)->take(4)->get();
		return view("admin.pages.dashboard", [
			'tickets' => $tickets,
			'trendings' => $trendings
		]);
	}


	public function profile()
	{
		return view("admin.pages.profile");
	}


	public function profileUpdate(Request $request)
	{

		$request->validate([
			"name"  => "required|max:191",
			"email" => "required|email|max:191|unique:admins,email," . auth()->user('admin')->id,
			"address" => "required|max:191",
			"phone"   => "required"
		]);
	}



	public function editSetting()
	{

		$setting = Setting::first();

		if ($setting != null) :
			$data['setting'] = $setting;
		else :
			$data["setting"] = new Setting;
		endif;

		return view('admin.pages.setting', compact(['data']));
	}


	public function editSettingProcess(Request $request)
	{


		$this->validate($request, [
			"name"        => "required|max:191",
			"logo"        => "nullable|image|mimes:jpg,jpeg,gif,png"
		]);

		$data = [];

		try {

			if ($setting = Setting::first()) :
				$data = ["id" => $setting->id];
			endif;

			$data["name"]     = $request->name;
			$data["email"]    = $request->email;
			$data["contact"]  = $request->contact;
			$data["phone"]    = $request->phone;
			$data["address"]  = $request->address;
			$data["facebook"]   = $request->facebook;
			$data["instagram"]  = $request->instagram;
			$data["youtube"]    = $request->youtube;
			$data["linkedin"]   = $request->linkedin;
			$data["tiktok"]     = $request->tiktok;
			$data["updated_at"] = date('Y-m-d H:i:s');


			$logo = $request->file('logo');

			if ($logo != null) :

				if (!File::exists('uploads/logo')) {
					File::makeDirectory('uploads/logo');
				}

				$ext  = $logo->extension();
				$path = "uploads/logo/" . isset($setting->logo) ?? "";
				$data["logo"] = "logo." . $ext;

				$logo = Image::make($logo);
				$logo->save("uploads/logo/" . $data["logo"]);

				@unlink($path);

			endif;

			if ($setting != null) :
				Setting::find($setting->id)->update($data);
			else :
				Setting::Create($data);
			endif;


			$request->session()->flash("success", "Successfully Updated Setting");
			return redirect()->route("admin.editSetting");
		} catch (\Exception $e) {

			@unlink("uploads/logo/" . $data["logo"]);

			$request->session()->flash("error", "Setting Update Operation Failed ! ! !");
			return redirect()->back()->withInput($request->all());
		}
	}




	public function adminList()
	{

		$data['admins'] = Admin::paginate(10);

		return view('admin.pages.admin-list', compact(['data']));
	}


	public function addAdmin()
	{
		return view('admin.pages.add-admin');
	}


	public function addAdminProcess(Request $request)
	{
		$data = $this->adminValidation($request);
		try {
			if ($request->profile) {
				$image_name = $this->uploadImage($request->profile);
				$data['profile'] = $image_name;
			}
			$success = Admin::create($data);
			if ($success) {
				$request->session()->flash('success', 'Admin Created Successfully !!!');
			} else $request->session()->flash('error', 'Failed To Create Admin !!!');
			return redirect()->route('admin.adminList');
		} catch (\Exception $e) {

			$request->session()->flash('error', 'Something Went Wrong, Try Again ! ! ! !');
			return redirect()->back()->withInput($request->except(['password']));
		}
	}


	public function editAdmin(Request $request, Admin $id)
	{

		$data['admin'] = $id;

		return view('admin.pages.edit-admin', compact(['data']));
	}


	public function editAdminProcess(Request $request, Admin $id)
	{
		$data = $this->adminValidation($request, 'update', $id->id);
		try {
			$admin = Admin::findorfail($id->id);
			if ($request->profile != null) {
				$image_name = $this->uploadImage($request->profile);
				$data['profile'] = $image_name;
				//Delete Previous Uploaded Image
				if ($admin->profile != null && file_exists(public_path() . "/uploads/profiles/admins/" . $admin->profile)) {
					unlink(public_path() . "/uploads/profiles/admins/" . $admin->profile);
				}
			}
			$success = $admin->update($data);
			if ($success) {
				$request->session()->flash('success', 'Admin Details Updated Successfully !!!');
			} else $request->session()->flash('error', 'Failed To Update Admin Details !!!');

			// 	$this->validate($request, [
			// 		"name"     => "required|max:191",
			// 		"email"    => "required|unique:admins,email," . $id->id,
			// 		"pics"     => "image|mimes:jpg,jpeg,png,gif,svg|max:10240",
			// 		"address"   => "max:191",
			// 		"status"   => "required|in:Active,Banned|max:191",
			// 		//"verified" => "required|max:191"
			// 	]);

			// 	try {


			// 		$id->name     = $request->name;
			// 		$id->email    = $request->email;
			// 		$id->phone    = $request->phone;
			// 		$id->address  = $request->address;
			// 		$id->status   = $request->status;
			// 		//$id->verified   = $request->verified;
			// 		$id->updated_at = date('Y-m-d H:i:s');

			// 		$file = $request->file('pics');

			// 		if ($file != NULL) {

			// 			$ext = $file->extension();
			// 			$pics = Image::make($file);
			// 			$pics->widen(250);
			// 			$link = "uploads/profiles/admins/" . $id->pics;

			// 			if (!File::exists('uploads/profiles/admins/')) {
			// 				File::makeDirectory('uploads/profiles/admins/');
			// 			}

			// 			$id->pics = 'profile-pics-' . time() . '.' . $ext;
			// 			$pics->save('uploads/profiles/admins/' . $id->pics);

			// 			@unlink($link);
			// 		}

			// 		$id->update();

			// 		$request->session()->flash('success', 'Successfully Updated Admin ! ! ! !');
			return redirect()->route('admin.adminList');
		} catch (\Exception $e) {

			$request->session()->flash('error', 'Error Occur While Updating Admin ! ! ! !');
			return redirect()->back();
		}
	}



	public function deleteAdmin(Request $request)
	{

		$id = trim($request->id);

		try {

			$admin = Admin::find($id);
			$link = "uploads/profiles/" . $admin->pics;

			$admin->delete();
			@unlink($link);

			return response()->json([
				"success" => true,
				"message" => "Admin Deleted Successfully ! ! !"
			]);
		} catch (\Exception $e) {

			return response()->json([
				"success" => false,
				"message" => "Error Occur While Deleting Admin ! ! !"
			]);
		}
	}


	public function adminAssign($id)
	{

		$data['admin'] = Admin::select('id', 'name')->find($id);
		$data['roles'] = Roles::all();
		$assign = Admin::join('admin_role as ar', 'ar.admin_id', 'admins.id')
			->select('ar.role_id')
			->where('ar.admin_id', $id)
			->get();

		foreach ($assign as $asg) :
			$data['assign'][] = $asg->role_id;
		endforeach;

		if (empty($data['assign'])) :
			$data['assign'][] = "";
		endif;

		return view('admin.pages.edit-admin-assign-role', compact(['data']));
	}


	public function adminAssignProcess(Request $request, $id)
	{

		$request->validate([
			"roles" => "required|numeric|max:191"
		]);

		try {

			AdminRole::where("admin_id", $id)->delete();
			AdminRole::insert(['admin_id' => $id, "role_id" => $request->roles]);

			$request->session()->flash('success', "Successfully Updated the Roles ! ! !");
			return redirect()->back();
		} catch (\Exception $e) {

			$request->session()->flash('error', "Error Occur While Updating the Roles ! ! !");
			return redirect()->back();
		}
	}

	public function uploadImage($image)
	{
		$path = public_path() . "/uploads/profiles/admins/";
		if (!File::exists($path)) {
			File::makeDirectory($path, 0777, true, true);
		}
		$filename = "Profile-" . Carbon::now()->timestamp . rand(0, 99) . "." . $image->extension();
		$success  = Image::make($image)->widen(250)->save($path . $filename);
		return $success ? $filename : false;
	}

	protected function adminValidation(Request $request, $option = 'add', $id = '')
	{
		return $this->validate($request, [
			'name' => 'required|string|max:191',
			'profile' => (($option == 'add') ? 'required' : 'sometimes') . '|image|max:10240',
			'email' => 'required|email|unique:admins,email,' . $id,
			//Regex for password needs 1 UpperCase, 1 Lowercase, 1 Special Character and 1 digit (0 - 9) atleast
			'password' => (($option == 'add') ? 'required' : 'sometimes') . '|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[@!$#%]).*$/|confirmed|min:6',
			'phone' => 'sometimes|nullable|string',
			'address' => 'sometimes|nullable|string',
			'status' => 'required|in:Active,Banned',
		]);
	}
}
