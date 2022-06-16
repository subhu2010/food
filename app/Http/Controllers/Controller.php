<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\{Category, Setting};


class Controller extends BaseController{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function setting(){
        return Setting::first()??new Setting;
    }


    public function initialData(){

        $data["setting"] = self::setting();

        $data["menus"]   = Category::select(["name", "slug", "icon", "pics"])
                                    ->status()->orderBy("order")
                                    ->whereNull("category_id")
                                    ->take(6)->get();

        return $data;

    }


}
