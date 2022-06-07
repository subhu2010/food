<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Socialite;
use Auth;


class SocialiteLoginController extends Controller{


	public function __construct(){
		$this->middleware("guest");
	}



	public function redirect($client){
		return Socialite::driver($client)->redirect();
	}


	public function callback($client){

		try{

			$data = Socialite::driver($client)->user();

			$user = User::whereEmail($data['email'])->first();

			if(!is_null($user)):

				Auth::login($user);

				return redirect()->route('user.dashboard');

			else:

				$user = User::create([
										"name"  => $data['name'],
										"email" => $data['email'],
										"social_id"   => $data['id'],
										"social_type" => $client,
										"password"    => bcrypt($data['id']),
										"email_verified_at" => date('Y-m-d H:i:s'),
										"verified" => 1
									]);

				Auth::login($user);

				return redirect()->route('user.dashboard');

			endif;

		}catch(\Exception $error){

			return redirect('user/login');

		}

	}

    
}
