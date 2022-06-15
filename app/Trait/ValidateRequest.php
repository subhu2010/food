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



    public static function bannerValidation(Request $request, $action = "add"){

        return $request->validate([
                        "name" => "required|string|max:191",
                        "description" => "nullable",
                        "link"   => "nullable|url|max:191",
                        "status" => "required|in:Active,Banned",
                        "pics"   => ($action == 'update'?'nullable':'required').'|image|mimes:png,jpg,jpeg,webp|max:2048',
                    ]);

    }


    public static function validatePage(Request $request, $action = "add"){

        return $request->validate([
                        "parent" => "nullable|exists:pages,id",
                        "name" => "required|string|max:191",
                        "pics" => ($action == 'update'?'nullable':'required').'|image|mimes:png,jpg,jpeg,webp|max:2048',
                        "desc" => "nullable",
                        "page"   => "required|max:191",
                        "status" => "required|in:Active,Banned",
                        "order"  => "required"
                    ]);

    }


    public static function validateNews(Request $request, $action = "add"){

        return $request->validate([
                        "name" => "required|string|max:191",
                        "pics" => ($action == 'update'?'nullable':'required').'|image|mimes:png,jpg,jpeg,webp|max:2048',
                        "description" => "required",
                        "status"  => "required|in:Active,Banned",
                        "post_by" => "required|max:191",
                        "time"    => "required|max:191"
                    ]);

    }



    public static function validateCategory(Request $request, $action = "add", $id = ""){

        $request->validate([    
            "name"   => ($action == 'update')?"required|max:191|unique:categories,name,".$id : 
                            "required|max:191|unique:categories",
            "parent" => (!is_null($request->parent))?"required|exists:categories,id":"",
            "icon"   => ($action == 'update'?'nullable':'required').'|image|mimes:png,jpg,jpeg,webp,svg|max:2048',  
            "pics"   => "nullable|image|mimes:jpg,jpeg,gif,png,webp",
            "order"  => "required",
            "status" => "required|in:Active,Banned"   
        ]);

    }


    public static function validateProduct(Request $request, $action = "add", $id = ""){

        $request->validate([    
            "category" => (!is_null($request->category))?"required|exists:categories,id":"",
            "type"  => "required|in:breakfast,lunch,dinner",
            "name"  => ($action == 'update'?'nullable':'required').'|max:191',
            "pics"  => ($action == 'update'?'nullable':'required').'|image|mimes:png,jpg,jpeg,webp,svg|max:2048',
            "price" => "required",
            "discount"  => "nullable",
            "status"    => "required|in:Active,Banned",
            "surprise"  => "required|in:Yes,No",
            "trending"  => "required|in:Yes,No",
            "recommend" => "required|in:Yes,No",
            "veg" => "required|in:Yes,No",
        ]);

    }



    public static function validateAdmin(Request $request, $action = "add", $id = ""){

        return $request->validate([
                            "name" => "required|string|max:191",
                            "email"    => 'required|email|max:191|unique:admins,email,'.($action == 'add'?'':$id),
                            "password" => ($action == 'update'?'nullable':'required'),
                            "profile" => ($action == 'update'?'nullable':'required').'|image|mimes:png,jpg,jpeg,webp|max:2048',
                            "address" => "nullable|max:191",
                            "phone"   => "required",
                            "status"  => "required|in:Active,Banned"
                        ]);

    }






}