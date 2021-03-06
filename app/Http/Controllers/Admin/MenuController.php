<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Category};
use Illuminate\Http\Request;
use App\Trait\{ValidateRequest, ImageUpload};

class MenuController extends Controller{

    use ValidateRequest, ImageUpload;


    public function index(){

        $data["categories"] = Category::get();

        return view('admin.pages.menu.menu-list', compact("data"));

    }
    

    public function addCategory(){

        $data["categories"] = Category::get();

        return view('admin.pages.menu.add-menu', compact("data"));

    }


    public function store(Request $request){

        $data = $this->menuValidation($request);

        if ($request->image) {
            $data['image'] = uploadImage($request->image, "Menu", 350, 350);
        }
        $success = SubCategory::create($data);
        $success ? $request->session()->flash('success', 'Menu added successfully !!!') : $request->session()->flash('error', 'Failed to add menu !!!');
        return redirect()->route('admin.menu.index');
        
    }

    public function show(SubCategory $menu)
    {
        //
    }

    public function edit(SubCategory $menu)
    {
        $categories = Category::all();
        return view('admin.Menu.create', ['menu' => $menu, 'categories' => $categories]);
    }

    public function update(Request $request, SubCategory $menu)
    {
        $data = $this->menuValidation($request, 'update', $menu->id);
        if ($request->image) {
            deleteImage($menu->image, "Menu");
            $data['image'] = uploadImage($request->image, "Menu", 350, 350);
        }
        $success = $menu->update($data);
        $success ? $request->session()->flash('success', 'Menu updated successfully !!!') : $request->session()->flash('error', 'Failed to update menu !!!');
        return redirect()->route('admin.menu.index');
    }


    public function destroy(SubCategory $menu)
    {
        if ($menu) {
            $menu_image = $menu->image;
            $success = $menu->delete();
            if ($success) {
                deleteImage($menu_image, "Menu");
                request()->session()->flash('success', "Menu Deleted Successfully !!!");
            } else request()->session()->flash('success', "Failed to delete menu !!!");
        } else request()->session()->flash('error', "Menu Not Found !!!");
        return redirect()->route('admin.menu.index');
    }

    public function menuValidation(Request $request, $option = 'add')
    {
        return $this->validate($request, [
            'name' => 'required|string',
            'image' => ($option == 'add' ? 'required' : 'sometimes') . '|image|max:5000',
            'description' => 'required',
            'category_id' => 'integer|nullable|sometimes'
        ]);
    }
}
