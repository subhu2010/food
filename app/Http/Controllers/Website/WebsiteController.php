<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Banner, Setting};


class WebsiteController extends Controller{


	public function landingPage(){

		$data["setting"] = self::setting();
		$data["banners"] = Banner::status()->get();

		return view("site.pages.landing-page", compact("data"));

	}


    
}
