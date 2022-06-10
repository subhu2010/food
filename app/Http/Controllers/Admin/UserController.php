<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Trait\{ValidateRequest, ImageUpload};


class UserController extends Controller{

    use ValidateRequest, ImageUpload;


    public function userList(){

        $data["users"] = User::with('userImages')->get();

        return view('admin.pages.user.users-list', compact("data"));

    }


    public function addUser(){
        return redirect()->route("admin.userList");
    }


    public function addUserProcess(Request $request){}


    public function editUser(User $user){ 

        return redirect()->route("admin.userList");

        $data["user"] = $user;

        return view("admin.pages.user.edit-user", compact("data"));

    }


    public function show(User $user, Request $request){}


    public function deleteUser(Request $request){

        $id = $request->id;

        try{

            $user = User::find($id);
            $profile = "uploads/profiles/users/".$user->profile_photo;

            $user->delete();
            @unlink($profile);

            return response()->json([
                                        "success" => true,
                                        "message" => "User Deleted Successfully ! ! !"
                                    ]);

        }catch(\Exception $error){

            return response()->json([
                                        "success" => false,
                                        "message" => $error->getMessage()
                                    ]);

        }

    }


}
