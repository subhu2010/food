<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;


class WebsiteController extends Controller{


	public function landingPage(){

		$data["setting"] = self::setting();

		return view("site.pages.landing-page", compact("data"));

	}


    
}
