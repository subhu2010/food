<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CakeBanner;
use Illuminate\Http\Request;

class CakeBannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $cake_banners = CakeBanner::all();
        return view('admin.CakeBanner.index', ['cakeBanners' => $cake_banners]);
    }

    public function create()
    {
        return view('admin.CakeBanner.create');
    }

    public function store(Request $request)
    {
        $data = $this->cakeBannerValidation($request);
        if ($request->image) {
            $data['image'] = uploadImage($request->image, 'CakeBanner', 1000, 900);
        }
        $request->status ? $data['status'] = 'active' : $data['status'] = 'inactive';
        $success = CakeBanner::create($data);
        $success ? $request->session()->flash('success', 'Banner Uploaded Successfully !!!') : $request->session()->flash('error', 'Faled to upload !!!');
        return redirect()->route('admin.cakebanner.index');
    }

    public function show(CakeBanner $cakebanner)
    {
        //
    }

    public function edit(CakeBanner $cakebanner)
    {
        return view('admin.CakeBanner.create', ['cakebanner' => $cakebanner]);
    }

    public function update(Request $request, CakeBanner $cakebanner)
    {
        $data = $this->cakeBannerValidation($request, 'update');
        if ($request->image != null) {
            $data['image'] = uploadImage($request->image, 'CakeBanner', 1000, 900);
        }
        $request->status ? $data['status'] = 'active' : $data['status'] = 'inactive';
        $success = $cakebanner->update($data);
        $success ? $request->session()->flash('success', 'Banner Updated Successfully !!!') : $request->session()->flash('error', 'Faled to update banner !!!');
        return redirect()->route('admin.cakebanner.index');
    }

    public function destroy(CakeBanner $cakebanner)
    {
        if ($cakebanner) {
            $banner_image = $cakebanner->image;
            $success = $cakebanner->delete();
            if ($success) {
                deleteImage($banner_image, "CakeBanner");
                request()->session()->flash('success', 'Cake Banner Delete Successfull !!!');
            } else request()->session()->flash('error', 'Failed to delete !!!');
        } else request()->session()->flash('error', 'Banner Not Found !!!');
        return request()->route('admin.cakebanner.index');
    }

    public function cakeBannerValidation(Request $request, $option = 'add')
    {
        return $this->validate($request, [
            'title' => 'required|string',
            'image' => ($option == 'add' ? 'required' : 'sometimes') . '|image|max:5000',
            'status' => 'sometimes'
        ]);
    }
}
