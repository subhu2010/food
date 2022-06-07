<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Auth;



class UserLoginController extends Controller{


    // use AuthenticatesUsers;


    protected $redirectTo = RouteServiceProvider::USER_DASH;


    public function __construct(){
        $this->middleware('guest', ['except' => ['logout', 'changePassword']]);
    }



    public function showLoginForm(){
        return view("user.auth.login");
    }



    public function login(Request $request){

        $rules = [
                    'email'    => ['required', 'max:191'],
                    'password' => ['required', 'min:6']
                ];

        $message = [
                        'email.required'    => 'The Email Field Required ! ! !',
                        'password.required' => 'The Password Field Required ! ! !'
                    ];

        $request->validate($rules, $message);

        $data = User::where("email", $request->email)->first();


        if(!isset($data)):
            throw ValidationException::withMessages(["email" => "Record Not Found on Database, Try Again ! ! !"]);
        endif;


        $credentails = [ "email" => $request->email, "password" => $request->password ];

        if(Auth::attempt($credentails)):

            return redirect()->route('user.dashboard');
        
        else:

            throw ValidationException::withMessages(["email" => "Invalid Credentials, Try Again ! ! !"]);

            return redirect()->back()->withInput($request->only(['rname, remail']));

        endif;

    }


    public function changePassword(Request $request){

        $validator = Validator::make($request->all(), [
            'old_password'     => 'required|min:6|max:191',
            'new_password'     => 'required|min:6|max:191',
            'confirm_password' => 'required|same:new_password|min:6|max:191',
        ]);

        if($validator->fails()){
            
            $error = [];
            $message = $validator->errors()->toArray();

            foreach($message as $key => $value){
            
                $ind[] = $key;
                $errors[] = $value[0];

            }

            return response()->json([
                "success" => false,
                "ind"     => $ind,
                "errors"  => $errors,
            ]);
       
        }

        $opass = $request->old_password;
        $npass = $request->new_password;

        // if(Hash::check('passwordToCheck', $user->password)){}

        if(password_verify($opass, auth()->user('web')->password)){

            User::find(auth()->user('web')->id)->update(["password" => bcrypt($npass)]);
            
            // User::guard('admin')->logoutOtherDevices($request->old_password); 


            return response()->json([
                "success" => true,
                "message" => "Successfully Changed The Password . . <strong>Logging Out ! ! !<strong>"
            ]);

        }else{

            return response()->json([
                "success" => false,
                "message" => "<strong>Old Password do not matched ! ! !<strong>"
            ]);

        }   

    }


    public function logout(){

        Auth::guard('web')->logout();

        return redirect()->route('user.login');

    }


}
