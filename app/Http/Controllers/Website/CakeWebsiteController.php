<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{CakeBanner, Setting};


class CakeWebsiteController extends Controller{


    public function cakeLandingPage(){

        $data["setting"] = self::setting();

        $data["cakebanners"] = CakeBanner::where("status", "active")->get();

        return view("site.cake.pages.landing-page", compact("data"));

    }

    

    
}
