<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RedirectIfAuthenticated{

    public function handle(Request $request, Closure $next, ...$guards){


        $guards = empty($guards) ? [null] : $guards;

        foreach($guards as $guard):
            
            if(Auth::guard($guard)->check()):

                if($guard === "admin"):
                    return redirect(RouteServiceProvider::ADMIN_DASH);
                // elseif($guard === "web"):
                //     return redirect(RouteServiceProvider::USER_DASH);
                else:
                    return redirect('/user/dashboard');
                endif;

            endif;

        endforeach;

        return $next($request);

    }

}
