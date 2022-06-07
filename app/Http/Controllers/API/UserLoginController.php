<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Auth;


class UserLoginController extends Controller
{


	public function askOTP(Request $request)
	{

		$validator = Validator::make($request->all(), [
			"contact" => "required|regex:/(?:\+977[- ])?\d{2}-?\d{7,8}/",
		]);


		if ($validator->fails()) :

			return response()->json([
				"success" => false,
				"message" => "Validation Failed ! ! !",
				"errors"  => $validator->errors()->toArray()
			], 200);

		endif;


		try {

			$user = User::where('contact_number', $request->contact)->first();

			if ($user != NULL) :

				if (!$user->verified) :

					$otp = rand(1000, 9999);

					User::where("contact_number", $request->contact)
						->update(["otp" => $otp]);

					return response()->json([
												"success"  => true,
												"verified" => false,
												"otp"      => $otp,
												"message"  => "OTP Sent Successfully ! ! !"
											], 200);

				else :

					return response()->json([
						"success"  => true,
						"verified" => true,
						"message"  => "Your Contact Number Already Verified, You Can Login ! ! !"
					], 200);

				endif;

			else :

				return response()->json([
					"success"  => true,
					"message"  => "Record Not Found, You can Register ! ! !"
				], 200);
			endif;
		} catch (Exception $error) {

			return response()->json([
				"success"  => false,
				"message"  => "Something Went Wrong, Try Again ! ! !"
			]);
		}
	}




	public function verifyOTP(Request $request)
	{

		$validator = Validator::make($request->all(), [
			"otp" => "required|exists:users",
		]);


		if ($validator->fails()) :

			return response()->json([
				"success" => false,
				"message" => "Invalid OTP ! ! !",
				"errors"  => $validator->errors()->toArray()
			], 200);

		endif;


		$user = User::where('otp', $request->otp)->first();

		if ($user != null) :

			$user->update(['verified' => '1']);

			$token = $user->createToken($user->contact_number)->plainTextToken;

			return response()->json([
				"success"    => true,
				"message"    => "Successfully Logged In ! ! !",
				"token_type" => "Bearer",
				"data"       => ["user" => $user, "token" => $token]
			], 200);

		endif;

		return response()->json([
			"success" => false,
			"errors"  => "Something Went Wrong Try Again ! ! !"
		]);
	}




	public function phoneRegister(Request $request)
	{

		$validator = Validator::make($request->all(), [
			"contact"   => "required|unique:users,contact_number|regex:/(?:\+977[- ])?\d{2}-?\d{7,8}/",
			"password"  => "required|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[@!$#%]).*$/|min:6",
			"confirmed" => "required|same:password"
		]);


		if ($validator->fails()) :

			return response()->json([
				"success" => false,
				"errors"  => $validator->errors()->toArray()
			], 200);

		endif;

		try {

			$otp = rand(1000, 9999);

			User::create([
				"contact_number" => $request->contact,
				"password"       => bcrypt($request->password),
				"verified"       => '0',
				"otp"            => $otp
			]);

			return response()->json([
				"success" => true,
				"otp"     => $otp,
				"message" => "OTP Sent Successfully ! ! !"
			], 200);
		} catch (Exception $error) {

			return response()->json([
				"success" => false,
				"errors"  => "Something Went Wrong Try Again ! ! !"
			]);
		}
	}




	public function phoneLogin(Request $request)
	{

		$validator = Validator::make($request->all(), [
			"contact" => "required|regex:/(?:\+977[- ])?\d{2}-?\d{7,8}/"
		]);


		if ($validator->fails()) :

			return response()->json([
				"success" => false,
				"errors"  => $validator->errors()->toArray()
			]);

		endif;


		try {

			$user = User::where('contact_number', $request->contact)->first();

			if ($user != null) :

				$otp = rand(1000, 9999);

				$user->update(["otp" => $otp]);

				return response()->json([
					"success" => true,
					"otp"     => $otp,
					"message" => "OTP Sent Successfully ! ! !"
				], 200);

			else :

				return response()->json([
					"success" => false,
					"message" => "Phone Number not Found, Try to Register ! ! "
				]);

			endif;
		} catch (Exception $error) {

			return response()->json([
				"success" => false,
				"message" => "Something Went Wrong, Try Again ! ! !"
			]);
		}
	}




	public function profile(Request $request)
	{

		return $request->user();
	}




	public function logout(Request $request)
	{

		$request->user()->currentAccessToken()->delete();

		return response()->json([
			"success" => true,
			"message" => "User Successfully Logged Out ! ! !"
		], 200);
	}
}
