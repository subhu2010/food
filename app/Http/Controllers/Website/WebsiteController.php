<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Banner, Category, Setting};


class WebsiteController extends Controller{


	public function landingPage(){

		$data["setting"] = self::setting();
		$data["banners"] = Banner::status()->get();
		$data["menus"]   = Category::select(["name", "slug", "icon", "pics"])
									->status()->orderBy("order")
									->whereNull("category_id")
									->take(6)
									->get();

		return view("site.pages.landing-page", compact("data"));

	}
	


	public function categoryDetail(){

		$data["setting"] = self::setting();
		$data["menus"]   = Category::select(["name", "slug", "icon", "pics"])
									->status()->orderBy("order")
									->whereNull("category_id")
									->take(6)
									->get();

		return view("site.pages.category-detail", compact("data"));

	}

    
}
