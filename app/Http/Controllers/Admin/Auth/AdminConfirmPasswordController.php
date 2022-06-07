<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;


class AdminConfirmPasswordController extends Controller{
    

    use ConfirmsPasswords;

    
    protected $redirectTo = RouteServiceProvider::ADMIN_DASH;

    
    public function __construct() 
        $this->middleware('guest:admin');




    



}
