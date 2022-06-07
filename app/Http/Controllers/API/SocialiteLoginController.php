<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;  
use Socialite;
use Auth;


class SocialiteLoginController extends Controller{


	/* Login With Social */
	public function redirect($client){

		$validated = $this->validateProvider($client);

		if(!is_null($validated)) return $validated;


		return Socialite::driver($client)->stateless()->redirect();
		
	}


	public function callback($client){

		try{

			$data = Socialite::driver($client)->stateless()->user();

			$user = User::whereEmail($data['email'])->first();

			if(!is_null($user)):

				$user->update([
								'verified'    => '1',
								"social_id"   => $data['id'],
								"social_type" => $client
							]);

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

			endif;



			$token = $user->createToken($user->email)->plainTextToken;

			return response()->json([
										"success"    => true,
										"message"    => "Successfully Logged In ! ! !",
										"token_type" => "Bearer",
										"data"       => [ "user" => $user, "token" => $token ]
									], 200);

		}catch(\Exception $error){

			return response()->json([	
										"success" => false,
										"error"   => "Something Went Wrong, Try Again ! ! !"
									], 422);

		}

	}



	public function validateProvider($provider){

		$valid = ['google', 'facebook'];

		if(!in_array($provider, $valid)):

			return response()->json([	
										"success" => false,
										"error"   => "Please login via  ".ucwords(implode(', ', $valid))
									], 422);

		endif;

	}

    
}
