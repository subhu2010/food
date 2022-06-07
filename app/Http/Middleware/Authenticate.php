<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;


class Authenticate extends Middleware{
    

    protected function redirectTo($request){


        if($request->expectsJson()):
            return response()->json(['error' => 'Unauthenticated.'], 401);
        else:

            if($request->is('admin') || $request->is('admin/*')):
                return route('admin.login');    
            elseif($request->is('web') || $request->is('user/*')):
                return route('user.login');    
            endif;

            return url('/');

        endif;


    }


}
