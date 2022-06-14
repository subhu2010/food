<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\{Admin, AdminRole, Product, Roles, Setting, Ticket};
use App\Trait\{ValidateRequest, ImageUpload};
use Carbon\Carbon;
use File;
use Image;

class AdminController extends Controller{

	use ValidateRequest, ImageUpload;


	public function dashboard(){

		// $data["tickets"]   = Ticket::with('user')->where('status', 'opened')->get();

		// $data["trendings"] = Product::where('is_trending', true)->take(4)->get();

		return view("admin.pages.page.dashboard");

	}


	public function profile(){
		return view("admin.pages.page.profile");
	}


	public function profileUpdate(Request $request){

		$request->validate([
			"name"  => "required|max:191",
			"email" => "required|email|max:191|unique:admins,email," . auth()->user('admin')->id,
			"address" => "required|max:191",
			"phone"   => "required"
		]);

	}


	public function setting(){

		$data["setting"] = Setting::first()??new Setting;

		return view("admin.pages.page.setting", compact("data"));

	}


	public function settingProcess(Request $request){

		$this->validateSetting($request);

		$data = [];

		try{

			$setting = Setting::first()??new Setting;

			if(isset($setting)):
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

			if($logo != null):

				$old_logo = "uploads/logo/".$setting->logo;
				$data["logo"] = $this->logoUpload($logo);

			endif;

			Setting::updateOrCreate(["id" => $setting->id], $data);

			if($logo != null) @unlink($old_logo);

			$request->session()->flash("success", "Successfully Updated Setting ! ! !");
			return redirect()->route("admin.setting");

		}catch(\Exception $error){

			// $request->session()->flash("error", "Setting Update Operation Failed ! ! !");
			$request->session()->flash("error", $error->getMessage());

			return redirect()->back()->withInput($request->all());

		}

	}




	public function adminList(){

		$data['admins'] = Admin::get();

		return view('admin.pages.admin.admin-list', compact(['data']));

	}


	public function addAdmin(){
		return view('admin.pages.admin.add-admin');
	}


	public function addAdminProcess(Request $request){

		$this->validateAdmin($request);

		try{

			$admin = new Admin;

			$admin->name     = $request->name;
			$admin->email    = $request->email;
			$admin->password = bcrypt($request->password);
			$admin->phone    = $request->phone;
			$admin->address  = $request->address;
			$admin->status   = $request->status;
			//$admin->verified   = $request->verified;
			$admin->updated_at = date('Y-m-d H:i:s');

			$profile = $request->file('profile');

			$pro = "";

			if($profile != null) $pro = $admin->profile = $this->singleImageUpload($profile, "uploads/profiles/admins/");

			$admin->save();

			$request->session()->flash('success', 'Admin Created Successfully ! ! ! !');
			return redirect()->route('admin.adminList');

		}catch(\Exception $error){

			@unlink("uploads/profiles/admins/".$pro);
			$request->session()->flash("error", $error->getMessage());
			return redirect()->back();

		}

	}


	public function editAdmin(Request $request, Admin $admin){

		$data['admin'] = $admin;

		return view('admin.pages.admin.edit-admin', compact(['data']));

	}


	public function editAdminProcess(Request $request, Admin $admin){

		$this->validateAdmin($request, 'update', $admin->id);

		try{

			$admin->name     = $request->name;
			$admin->email    = $request->email;
			$admin->phone    = $request->phone;
			$admin->address  = $request->address;
			$admin->status   = $request->status;
			//$admin->verified   = $request->verified;
			$admin->updated_at = date('Y-m-d H:i:s');

			$profile = $request->file('profile');

			$backup = "";

			if($profile != null):

				$old_profile = "uploads/profiles/admins/".$admin->profile;
				$pro = $admin->profile = $this->singleImageUpload($profile, "uploads/profiles/admins/");

			endif;

			$admin->update();

			if($profile != null) @unlink($old_profile);

			$request->session()->flash('success', 'Successfully Updated Admin ! ! ! !');
			return redirect()->route('admin.adminList');

		}catch(\Exception $error){

			@unlink("uploads/profiles/admins/".$backup);
			$request->session()->flash("error", $error->getMessage());
			return redirect()->back();

		}

	}



	public function deleteAdmin(Request $request){

		$id = trim($request->id);

		try{

			$admin = Admin::find($id);
			$link = "uploads/profiles/admins/".$admin->profile;

			$admin->delete();
			@unlink($link);

			return response()->json([
										"success" => true,
										"message" => "Admin Deleted Successfully ! ! !"
									]);

		}catch(\Exception $error){

			return response()->json([
										"success" => false,
										"message" => "Error Occur While Deleting Admin ! ! !"
									]);

		}

	}


	public function adminAssign($id){

		$data['admin'] = Admin::select('id', 'name')->find($id);
		$data['roles'] = Roles::all();
		$assign = Admin::join('admin_role as ar', 'ar.admin_id', 'admins.id')
						->select('ar.role_id')
						->where('ar.admin_id', $id)
						->get();

		foreach ($assign as $asg) :
			$data['assign'][] = $asg->role_id;
		endforeach;

		if(empty($data['assign'])):
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


}
