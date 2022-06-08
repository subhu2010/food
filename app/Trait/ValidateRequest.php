<?php 

namespace App\Trait;
use Illuminate\Http\Request;

trait ValidateRequest{


	public static function validateBanner(Request $request, $action = "add", $id = ""){

        $request->validate([    
            "name"   => ($action == 'update')?"required|max:191|unique:banners,name,".$id : 
                            "required|max:191|unique:banners",
            "pics"   => "nullable|image|mimes:jpg,jpeg,gif,png,webp",
            "desc"   => "nullable",
            "order"  => "required",
            "link"   => "required|url|max:191",
            "status" => "required|in:Active,Banned"     
        ]);

    }


	public static function validateSetting(Request $request){

        $request->validate([
            "name"  => "required|max:191",
            "email" => "nullable|email|max:191",
            "contact" => "nullable",
            "phone"   => "nullable",
            "address" => "nullable",
            "logo"    => "nullable|image|mimes:jpg,jpeg,gif,png,webp",
            "facebook"  => "nullable|url|max:191",
            "instagram" => "nullable|url|max:191",
            "seo_title" => "nullable|max:191"
        ],
    	[
    		"name.required" => "Name is required ! ! !"
    	]);

    }



    public static function bannerValidation(Request $request, $action = "update", $id = ""){

        return $request->validate([
                        "name" => "required|string|max:191",
                        "description" => "nullable",
                        "link"   => "nullable|url|max:191",
                        "status" => "required|in:Active,Banned",
                        "pics"   => ($action == 'update'?'nullable':'required').'|image|mimes:png,jpg,jpeg,webp|max:5000'
                    ]);

    }



}