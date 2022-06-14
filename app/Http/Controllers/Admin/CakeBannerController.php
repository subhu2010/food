<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CakeBanner;
use Illuminate\Http\Request;
use App\Trait\{ValidateRequest, ImageUpload};


class CakeBannerController extends Controller{

    use ValidateRequest, ImageUpload;


    public function index(){

        $cake_banners = CakeBanner::all();

        return view('admin.CakeBanner.index', ['cakeBanners' => $cake_banners]);

    }


    public function create(){
        return view('admin.CakeBanner.create');
    }


    public function store(Request $request){

        $this->cakeBannerValidation($request);

        try{

            $image = $request->file("image");

            $data = [
                        "title" => $request->title,
                        "description" => $request->description,
                        "status" => $request->status
                    ];

            $backup = "";
            if($image != null):
                $backup = $data['image'] = $this->singleImageUpload($image, 'uploads/cakebanners/');
            endif;

            CakeBanner::create($data);

            $request->session()->flash("success", "Cake Banner Created Successfully ! ! !");

            return redirect()->route('admin.cakebanner.index');

        }catch(\Exception $error){

            @unlink("uploads/cakebanners/".$backup);
            $request->session()->flash("error", $error->getMessage());

            return redirect()->back()->withInput($request->all());

        }


    }


    public function show(CakeBanner $cakebanner){}


    public function edit(CakeBanner $cakebanner){

        return view('admin.CakeBanner.create', ['cakebanner' => $cakebanner]);

    }


    public function update(Request $request, CakeBanner $cakebanner){

        $this->cakeBannerValidation($request, 'update');

        try{

            $cakebanner->title = $request->title;
            $cakebanner->description = $request->description;
            $cakebanner->status = $request->status;

            $image = $request->file("image");

            $old_image = "";
            $backup    = "";

            if($image != null):

                $old_image = "uploads/cakebanners/".$cakebanner->image;

                $backup = $cakebanner->image = $this->singleImageUpload($image, 'uploads/cakebanners/');

            endif;

            $cakebanner->update();

            if($image != null) @unlink("uploads/cakebanners/".$old_image);

            $request->session()->flash("success", "Cake Banner Updated Successfully ! ! ! ");
            
            return redirect()->route('admin.cakebanner.index');

        }catch(\Exception $error){

            @unlink("uploads/cakebanners/".$backup);

            $request->session("error", $error->getMessage());

            return redirect()->back()->withInput($request->all());

        }

    }


    public function destroy(CakeBanner $cakebanner){

        try{

            $image = "uploads/cakebanners/".$cakebanner->image;

            $cakebanner->delete();

            @unlink($image);

            $request->session()->flash("success", "Cake Banner Deleted Successfully ! ! !");

            return redirect()->route('admin.cakebanner.index');

        }catch(\Exception $error){

            $request->session()->flash("error", $error->getMessage());

            return redirect()->back()->withInput($request->all());

        }

    }


    public function cakeBannerValidation(Request $request, $option = 'add'){

        return $this->validate($request, [
                                            'title' => 'required|string',
                                            'image' => ($option == 'add' ? 'required' : 'sometimes') . '|image|max:5000',
                                            'status' => 'sometimes'
                                        ]);

    }


}
