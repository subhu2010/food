<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Setting;


class Controller extends BaseController{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function setting(){
        return Setting::first()??new Setting;
    }


    public function intialData(){

        $data["setting"] = self::setting();

        return $data;

    }


    public function sluggable($text){

    	$text = preg_replace('~[^\pL\d]+~u', '-', $text);
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        $text = trim($text, '-');
        $text = preg_replace('~-+~', '-', $text);
        $text = strtolower($text);

        if(empty($text)){ return 'n-a'; }

        return $text;

    }

}
