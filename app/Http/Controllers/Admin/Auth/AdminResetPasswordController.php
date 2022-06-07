<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Password;
use Auth;


class AdminResetPasswordController extends Controller{
    

    use ResetsPasswords;

    protected $redirectTo = RouteServiceProvider::ADMIN_DASH;


    public function __construct(){
        $this->middleware("guest:admin");
    }


    public function guard(){
        return Auth::guard("admin");
    }


    public function broker(){
        return Password::broker("admins");
    }


    public function showResetForm(Request $request){

        $token = $request->route()->parameter('token');

        return view('admin.auth.reset')->with([
                                                'token' => $token, 
                                                'email' => $request->email
                                            ]);

    }



}
