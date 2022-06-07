<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class UserResetPasswordController extends Controller{

    use ResetsPasswords;

    protected $redirectTo = RouteServiceProvider::USER_DASH;





}
