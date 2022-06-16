<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Banner, Category, Product, Setting};


class WebsiteController extends Controller{


	public function landingPage(){

		$data = self::initialData();

		$data["banners"] = Banner::status()->get();

		$data["trending"] = Product::select(["id", "name", "slug", "thumb", "description", "price", "discount", "veg"])
									->status()->trending()
									->inRandomOrder()
									->take(15)->get();

		$data["veg"] = Product::select(["id", "name", "slug", "thumb", "description", "price", "discount", "veg"])
								->status()->veg()
								->inRandomOrder()
								->take(15)->get();

		$data["recommend"] = Product::select(["id", "name", "slug", "thumb", "description", "price", "discount", "veg"])
									->status()->recommend()
									->inRandomOrder()
									->take(15)->get();

		return view("site.pages.landing-page", compact("data"));

	}
	


	public function categoryDetail(){

		$data = self::initialData();

		return view("site.pages.category-detail", compact("data"));

	}



	public function productDetail($slug){

		$data = $this->initialData();

		$data["product"] = Product::whereSlug($slug)->with(["category"])->first();

		$data["similar"] = Product::select(["id", "name", "slug", "thumb", "description", "price", "discount", "veg"])
									->where("slug", "!=", $slug)
									->inRandomOrder()
									->take(10)->get();

		return view("site.pages.product-detail", compact("data"));

	}

    
}
