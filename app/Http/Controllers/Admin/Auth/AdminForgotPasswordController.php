<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Password;


class AdminForgotPasswordController extends Controller{


    use SendsPasswordResetEmails;


    public function __construct(){
        $this->middleware("guest:admin");
    }


    public function broker(){
        return Password::broker("admins");
    }
    


    public function showLinkRequestForm(){

        return view("admin.auth.email");

    }



}
