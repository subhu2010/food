<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Trait\{ValidateRequest, ImageUpload};
use Illuminate\Support\Str;


class BannerController extends Controller{

    use ValidateRequest, ImageUpload;


    public function index(){

        $data["banners"] = Banner::get();

        return view('admin.pages.banner.banner-list', compact("data"));

    }


    public function create(){
        return view('admin.pages.banner.create');
    }


    public function store(Request $request){

        $this->bannerValidation($request, "add");

        $pics = "";

        try{

            $data = [
                        "name" => $request->name, 
                        "slug" => strtolower(Str::slug($request->name)).'-'.strtolower(Str::random(5)),
                        "description" => $request->description,
                        "link"   => $request->link,
                        "status" => $request->status
                    ];

            $pics = $request->file("pics");

            if($pics != null):
                $pics = $data['pics'] = $this->singleImageUpload($pics, "uploads/banners/");
            endif;

            Banner::create($data);

            $request->session()->flash("success", "Banner Added Successfully ! ! !");
            return redirect()->route('admin.banner.index');

        }catch(\Exception $error){

            @unlink("uploads/banners/".$pics);

            $request->session()->flash("error", "Something Went Wrong, Try Again ! ! !");
            return redirect()->route("admin.banner.index");

        }


    }


    public function show(Banner $banner){}



    public function edit(Banner $banner){

        $data["banner"] = $banner;

        return view('admin.pages.banner.create', compact("data"));

    }



    public function update(Request $request, Banner $banner){

        $this->bannerValidation($request, 'update', $banner->id);

        try{

            $data = [
                        "name"   => $request->name,
                        "description" => $request->description,
                        "status" => $request->status,
                        "link"   => $request->link,
                        "created_at" => date("Y-m-d H:i:s")
                    ];

            $pics = $request->file("pics");

            if($pics != null):

                $old_pics = "uploads/banners/".$banner->pics;
                $data["pics"] = $this->singleImageUpload($pics, "uploads/banners/");
                @unlink($old_pics);

            endif;

            $banner->update($data);

            $request->session()->flash("success", "Banner Updated Successfully ! ! !");

            return redirect()->route('admin.banner.index');

        }catch(\Exception $error){

            $request->session()->flash("error", $error->getMessage());

            return redirect()->route('admin.banner.index');

        }


    }


    public function destroy(Banner $banner){

        if($banner):

            $banner_image = $banner->pics;
            $success = $banner->delete();

            if($success):

                deleteImage($banner_image, "Banner");
                request()->session()->flash('success', 'Banner deleted !!!');

            else:
                request()->session()->flash('error', 'Failed to delete banner !!!');
            endif; 

        else: 
            request()->session()->flash('error', 'Banner not found');
        endif;

        return redirect()->route('admin.banner.index');

    }



}
