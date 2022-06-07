<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cake;
use App\Models\CakeImages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CakeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $cakes = Cake::with('cakeImages')->get();
        return view('admin.Cake.index', ['cakes' => $cakes]);
    }

    public function create()
    {
        return view('admin.Cake.create');
    }

    public function store(Request $request)
    {
        // return $request->all();
        $data = $this->cakeValidation($request);
        $data_images = $this->cakeImageValidaiton($request);
        $data['slug'] = Str::slug($request->name);
        if ($request->primary_image) {
            $data['primary_image'] = uploadImage($request->primary_image, "Cake", 350, 350);
        }
        $request->status ? $data['status'] = 'available' : $data['status'] = 'notavailable';
        $cake = Cake::create($data);
        if ($cake) {
            if ($request->image_name != null) {
                foreach ($request->image_name as $img) {
                    $data_images['image_name'] = uploadImage($img, "Cake", 350, 350);
                    $data_images['cake_id'] = $cake->id;
                    CakeImages::create($data_images);
                }
            }
            $request->session()->flash('success', 'Cake Added Successfully !!!');
        } else $request->session()->flash('error', 'Failed to add cake !!!');
        return redirect()->route('admin.cake.index');
    }

    public function show(Cake $cake)
    {
        //
    }

    public function edit(Cake $cake)
    {
        $cake = Cake::with('cakeImages')->findOrFail($cake->id);
        return view('admin.Cake.create', ['cake' => $cake]);
    }

    public function update(Request $request, Cake $cake)
    {
        $data = $this->cakeValidation($request, 'update');
        if ($request->name != null) {
            $data['slug'] = Str::slug($request->name);
        }
        if ($request->primary_image != null) {
            deleteImage($cake->primary_image, "Cake");
            $data['primary_image'] = uploadImage($request->primary_image, "Cake", 350, 350);
        }
        $request->status ? $data['status'] = 'available' : $data['status'] = 'notavailable';
        $success = $cake->update($data);
        if ($success) {
            if ($request->image_name != null) {
                foreach ($request->image_name as $img) {
                    $data_images['image_name'] = uploadImage($img, "Cake", 350, 350);
                    $data_images['cake_id'] = $cake->id;
                    CakeImages::create($data_images);
                }
            }
            $request->session()->flash('success', 'Cake Updated Successfully !!!');
        } else $request->session()->flash('error', 'Failed to update cake !!!');
        return redirect()->route('admin.cake.index');
    }

    public function destroy(Cake $cake)
    {
        $cake = Cake::with('cakeImages')->findOrFail($cake->id);
        $cake_image = $cake->primary_image;
        $cake_other_images = $cake->cakeImages;
        $success = $cake->delete();
        if ($success) {
            if ($cake_image != null) {
                deleteImage($cake_image, "Cake");
            }
            if ($cake_other_images != null) {
                foreach ($cake_other_images as $img) {
                    deleteImage($img->image_name, "Cake");
                }
            }
        } else request()->session()->flash('error', 'Failed to delete cake !!!');
        return redirect()->route('admin.cake.index');
    }

    public function cakeValidation(Request $request, $option = 'add')
    {
        return $this->validate($request, [
            'name' => 'required|string',
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
            'description' => 'required',
            'primary_image' => ($option == 'add' ? 'required' : 'sometimes') . '|image|max:5000',
            'status' => 'sometimes',
            'size' => 'required|string'
        ]);
    }

    public function cakeImageValidaiton(Request $request)
    {
        return $this->validate($request, [
            '' => 'sometimes',
            'image_name.*' => 'image|max:5000'
        ]);
    }
}
