<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;


class UserRegisterController extends Controller{

    // use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::USER_DASH;


    public function __construct(){
        $this->middleware('guest');
    }


    public function showRegistrationForm(){
        return view('user.auth.login');
    }


    public function register(Request $request){

        $rules = [
                    'rname'     => ['required', 'max:191'],
                    'remail'    => ['required', 'email', 'max:191', 'unique:users,email'],
                    'rpassword' => ['required', 'min:6'],
                    'rconfirm_password' => ['required', 'min:6', 'same:rpassword'],
                ];

        $message = [
                        'rname.required'     => 'The Name Field Required ! ! !',
                        'remail.required'    => 'The Email Field Required ! ! !',
                        'rpassword.required' => 'The Password Field Required ! ! !',
                        'rconfirm_password.required' => 'The Confirm Password Field Required ! ! !',
                        'rconfirm_password.same'     => 'The Password and Confirm Password Must be Same ! ! !'
                    ];

        $request->validate($rules, $message);

        $data = User::create([
                                'name'     => $request->rname,
                                'email'    => $request->remail,
                                'password' => bcrypt($request->rpassword)
                            ]);

        if(Auth::attempt(["email" => $data->email, "password" => $request->rpassword ])):

            return redirect()->route('user.dashboard');

        else:

            throw ValidationException::withMessages(["remail" => "Something Went Wrong, Try Again ! ! !"]);

            return redirect()->route('user.login')->withInput($request->only('rname', 'remail'));

        endif;

    }


}
