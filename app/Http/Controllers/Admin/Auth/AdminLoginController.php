<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Admin;
use Validator;  
use Auth;


class AdminLoginController extends Controller{


    use AuthenticatesUsers;

    
    protected $redirectTo = RouteServiceProvider::ADMIN_DASH;

    
    public function __construct(){
        $this->middleware('guest:admin', ['except' => ['changePassword', 'logout', 'authenticated']]);
    }


    public function login(){

        return view("admin.auth.login");

    }


    public function loginProcess(Request $request){

        $rules = [
                    'email'    => ['required', 'max:191'],
                    'password' => ['required', 'min:6']
                ];

        $message = [
                        'email.required'    => 'The Email Field Required ! ! !',
                        'password.required' => 'The Password Field Required ! ! !'
                    ];

        $request->validate($rules, $message);

        $credentails = [ "email" => $request->email, "password" => $request->password ];

        if(Auth::guard('admin')->attempt($credentails)):

            return redirect()->route('admin.dashboard');
        
        else:

            $request->session()->flash('error', 'Invalid Login Credentials ! ! ! !');

            return redirect()->back()->withInput($request->only('email'));

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

        $id = Auth::guard('admin')->user()->id;
        $oldPass = Admin::find($id);

        // if(Hash::check('passwordToCheck', $user->password)){}

        if(password_verify($opass, $oldPass->password)){

            Admin::find($id)->update(["password" => bcrypt($npass)]);
            
            Auth::guard('admin')->logoutOtherDevices($request->old_password); 


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



    public function adminLogout(Request $request){

        Auth::guard('admin')->logout();

        return redirect()->route("admin.login");

        // try{

        //     Auth::guard('admin')->logout();

        //     return response()->json([
        //                             "success" => true,
        //                             "message" => "Successfully Logged Out ! ! !"
        //                         ]);

        // }catch(\Exception $error){

        //     return response()->json([
        //                             "success" => false,
        //                             "message" => "Something Went Wrong ! ! ! Try Again"
        //                         ]);

        // }


    }


}
