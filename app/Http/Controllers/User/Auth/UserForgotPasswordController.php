<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class UserForgotPasswordController extends Controller{

    use SendsPasswordResetEmails;


}
