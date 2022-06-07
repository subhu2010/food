<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:admin");
    }

    public function index()
    {
        $banners = Banner::all();
        return view('admin.Banner.index', ['banners' => $banners]);
    }

    public function create()
    {
        return view('admin.Banner.create');
    }

    public function store(Request $request)
    {
        $data = $this->bannerValidation($request);
        if ($request->image) {
            $data['image'] = uploadImage($request->image, "Banner", 1600, 480);
        }
        $data['slug'] = Str::slug($request->title);
        $success = Banner::create($data);
        $success ? $request->session()->flash('success', 'Banner Added Successfully !!!') : $request->session()->flash('error', 'Failed to add banner !!!');
        return redirect()->route('admin.banner.index');
    }

    public function show(Banner $banner)
    {
        //
    }

    public function edit(Banner $banner)
    {
        return view('admin.Banner.create', ['banner' => $banner]);
    }

    public function update(Request $request, Banner $banner)
    {
        $data = $this->bannerValidation($request, 'update');
        if ($request->image) {
            deleteImage($banner->image, "Banner");
            $data['image'] = uploadImage($request->image, "Banner", 1600, 480);
        }
        $success = $banner->update($data);
        $success ? $request->session()->flash('success', 'Banner Information Updated !!!') : $request->session()->flash('error', 'Failed to update banner !!!');
        return redirect()->route('admin.banner.index');
    }

    public function destroy(Banner $banner)
    {
        if ($banner) {
            $banner_image = $banner->image;
            $success = $banner->delete();
            if ($success) {
                deleteImage($banner_image, "Banner");
                request()->session()->flash('success', 'Banner deleted !!!');
            } else request()->session()->flash('error', 'Failed to delete banner !!!');
        } else request()->session()->flash('error', 'Banner not found');
        return redirect()->route('admin.banner.index');
    }

    public function bannerValidation(Request $request, $option = 'add')
    {
        return $this->validate($request, [
            'title' => 'required|string',
            'description' => 'sometimes|nullable',
            'status' => 'required|in:active,inactive',
            'image' => ($option == 'add' ? 'required' : 'sometimes') . '|image|max:5000'
        ]);
    }
}
