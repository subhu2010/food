<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Image;
use File;


class UserController extends Controller{


	public function dashboard(){

		$data['active'] = 'dashboard';

		return view("user.pages.dashboard", compact("data"));

	}



	public function profile(){

		$data['active'] = 'profile';

		return view("user.pages.profile", compact("data"));

	}



	public function updateProfile(Request $request){

		$request->validate([
								"name"    => "required|max:191",
								"email"   => "required|email|max:191",
								"contact" => "required",
								"address" => "required|max:191"
							]);

		$user = User::find(auth()->user('web')->id)->first();

		$user->name   = $request->name;
		$user->email  = $request->email;
		$user->contact_number   = $request->contact;
		$user->address   = $request->address;
		$user->facebook  = $request->facebook;
		$user->instagram = $request->instagram;
		$user->twitter   = $request->twitter;
		$user->youtube   = $request->youtube;

		$user->save();

		$request->session()->flash("success", "User Profile Updated Successfully ! ! !");

		return redirect()->route('user.profile');


	}


	public function myOrders(){

		$data['active'] = "my-orders";

		return view("user.pages.my-orders", compact("data"));

	}


	public function myReviews(){

		$data['active'] = "my-reviews";

		return view("user.pages.my-reviews", compact("data"));

	}


	public function myWishlist(){

		$data['active'] = "my-wishlist";

		return view("user.pages.my-wishlist", compact("data"));

	}


	public function history(){

		$data['active'] = "history";

		return view("user.pages.history", compact("data"));

	}



    
}
