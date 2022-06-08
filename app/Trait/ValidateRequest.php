<?php 

namespace App\Trait;
use Illuminate\Http\Request;

trait ValidateRequest{


	public static function bannerValidate(Request $request, $action = "add", $id = ""){

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
    

	public static function settingValidate(Request $request){

        $request->validate([
            "name"  => "required|max:191",
            "email" => "nullable|email|max:191",
            "logo"  => "nullable|image|mimes:jpg,jpeg,gif,png,webp",
            "facebook"  => "nullable|url|max:191",
            "instagram" => "nullable|url|max:191",
            "seo_title" => "nullable|max:191"
        ]);

    }



}