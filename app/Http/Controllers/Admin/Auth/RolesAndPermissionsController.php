<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Roles;
use App\Models\Permissions;
use App\Models\PermissionRole;
use App\Models\AdminRole;
use Auth;
use DB;


class RolesAndPermissionsController extends Controller{


	public function __construct(){
		$this->middleware('auth:admin');
	}


	public function rolesList(){

		$data['roles'] = Roles::all();

		return view('admin.auth.roles-list', compact(['data']));

	}


	public function addRoles(){
		return view('admin.auth.add-roles');
	}


	public function addRoleProcess(Request $request){

		$this->validate($request, [
			"label" => "required|max:191",
			"name"  => "required|max:191"
		]);

		try{

			$data = array(
				"label"      => $request->label,
				"name"       => $request->name,
				"created_at" => date('Y-m-d H:i:s')
			);

			Roles::create($data);

			$request->session()->flash('success', 'Successfully Added Roles ! ! ! !');
			return redirect()->route('admin.rolesList');


		}catch(\Exception $e){

			$request->session()->flash('error', 'Error Occur While Adding Roles ! ! ! !');
			return redirect()->back()->withInput($request->only(['name', 'label']));

		}


	}


	public function editRole(Roles $id){

		$data['roles'] = $id;

		return view('admin.auth.edit-roles', compact(['data']));

	}


	public function editRoleProcess(Request $request, $id){

		$this->validate($request, [
			"label" => "required|max:191",
			"name"  => "required|max:191"
		]);

		try{

			$data = array(
				"label"      => $request->label,
				"name"       => $request->name,
				"updated_at" => date('Y-m-d H:i:s')
			);

			Roles::find($id)->update($data);

			$request->session()->flash('success', 'Successfully Updated Roles ! ! ! !');
			return redirect()->route('admin.rolesList');


		}catch(\Exception $e){

			$request->session()->flash('error', 'Error Occur While Updating Roles ! ! ! !');
			return redirect()->route('admin.editRoles', $id);

		}

	}


	public function deleteRoles(Request $request){

		$id = trim($request->id);

		if(Roles::find($id)->Delete()){

			return response()->json([
				"success" => true,
				"message" => "Roles Deleted Successfully ! ! ! ! !"
			]);

		}else{

			return response()->json([
				"success" => false,
				"message" => "Roles Cannot be Deleted ! ! ! ! !"
			]);

		}

	}


	public function permissionList(){

		$data['permission'] = Permissions::all();

		return view('admin.auth.permission-list', compact(['data']));

	}


	public function addPermission(){
		return view('admin.auth.add-permission');
	}


	public function addPermissionProcess(Request $request){

		$this->validate($request, [
			"label" => "required|max:191",
			"name"  => "required|max:191"
		]);

		try{

			$data = array(
				"label"      => $request->label,
				"name"       => $request->name
			);

			Permissions::create($data);

			$request->session()->flash('success', 'Successfully Added Permissions ! ! ! !');
			return redirect()->route('admin.permissionList');


		}catch(\Exception $e){

			$request->session()->flash('error', 'Error Occur While Adding Permissions ! ! ! !');
			return redirect()->back()->withInput($request->only(['name', 'label']));

		}

	}



	public function editPermission(Permissions $id){

		$data['permission'] = $id;

		return view('admin.auth.edit-permission', compact(['data']));

	}


	public function editPermissionProcess(Request $request, Permissions $id){

		$this->validate($request, [
			"label" => "required|max:191",
			"name"  => "required|max:191"
		]);

		try{

			$id->label      = $request->label;
			$id->name       = $request->name;
			$id->updated_at = date('Y-m-d H:i:s');

			$id->save();

			$request->session()->flash('success', 'Successfully Updated Permissions ! ! ! !');
			return redirect()->route('admin.permissionList');


		}catch(\Exception $e){

			$request->session()->flash('error', 'Error Occur While Updating Permissions ! ! ! !');
			return redirect()->back();

		}

	}


	public function deletePermission(Request $request){

		$id = trim($request->id);

		try{

			Permissions::find($id)->delete();

			return response()->json([
				"success" => true,
				"message" => "Permission Deleted Successfully ! ! ! ! !"
			]);

		}catch(\Exception $e){

			return response()->json([
				"success" => false,
				"message" => "Permission Cannot be Deleted ! ! ! ! !"
			]);

		}
		
		
	}


	public function assignRoles(Admin $id){

		$data['admin']  = $id;
		$data['roles']  = Roles::all();
		$assign = Roles::join('admin_role as ar', 'ar.role_id', 'roles.id')
						->select('roles.id as r_id')
						->where('ar.admin_id', $id->id)
						->get();

		foreach($assign as $asg):
			$data['assign'][] = $asg->r_id;
		endforeach;

		if(empty($data['assign'])):
			$data['assign'][] = "";
		endif;				

		return view("admin.auth.assign-roles", compact("data"));

	}


	public function assignRolesProcess(Request $request, Admin $id){

		$this->validate($request, [
			"roles" => "required|exists:roles,id",
		]);

		try{
			
			if(AdminRole::where("admin_id", $id->id)->exists()):

				AdminRole::where("admin_id", $id->id)
							->update(["role_id" => $request->roles]);

			else:
				AdminRole::create([
									"admin_id" => $id->id,
									"role_id"  => $request->roles
									]);

			endif;
						
			
			$request->session()->flash('success', 'Successfully Assigned Roles ! ! !');
			return redirect()->back();	

		}catch(\Exception $e){

			$request->session()->flash('error', 'Something Went Wrong, Try Again ! ! !');
			return redirect()->back();

		}

		

	}


	public function assignPermissions(Roles $id){

		$data['roles'] = $id;
		$data['permission'] = Permissions::all();
		$assign = Roles::join('permission_role as pr', 'pr.role_id', 'roles.id')
						->select('pr.permission_id as p_id')
						->where('roles.id', $id->id)
						->get();

		foreach($assign as $asg):
			$data['assign'][] = $asg->p_id;
		endforeach;

		if(empty($data['assign'])):
			$data['assign'][] = "";
		endif;

		return view('admin.auth.assign-permissions', compact(['data']));

	}


	public function assignPermissionsProcess(Request $request, Roles $id){

		// try{

			foreach($request->permissions as $key => $per):

				$data[] = array(
					"role_id"       => $id->id,
					"permission_id" => $per
				);

			endforeach;

			PermissionRole::where('role_id', $id->id)->delete();

			PermissionRole::insert($data);

			$request->session()->flash('success', 'Successfully Assigned Permissions ! ! ! !');
			return redirect()->back();

		// }catch(\Exception $e){

		// 	$request->session()->flash('error', 'Something Went Wrong, Try Again ! ! !');
		// 	return redirect()->back();

		// }


	}

   
}