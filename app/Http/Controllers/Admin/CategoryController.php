<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Category};
use Illuminate\Http\Request;
use App\Trait\{ValidateRequest, ImageUpload};
use Illuminate\Support\Str;


class CategoryController extends Controller{

    use ValidateRequest, ImageUpload;


    public function categoryList(){

        $data["categories"] = Category::with(["parent:id,category_id,name"])->get();

        return view('admin.pages.category.category-list', compact("data"));

    }
    

    public function addCategory(){

        $data["categories"] = Category::get();

        return view('admin.pages.category.add-category', compact("data"));

    }



    public function addCategoryProcess(Request $request){

        $this->validateCategory($request);

        try{

            $data = [
                        "category_id" => $request->id,
                        "name"        => $request->name,
                        "slug"        => strtolower(Str::slug($request->name)),
                        "desc"        => $request->desc,
                        "status"      => $request->status,
                        "order"       => $request->order,
                        "created_at"  => date("Y-m-d H:i:s")
                    ];

            $icon = $request->file("icon");
            $pics = $request->file("pics");

            $backup_icon = "";
            $backup_pics = "";

            if($icon != null) $backup_icon = $data["icon"] = $this->singleImageUpload($icon, "uploads/categories/");
            if($pics != null) $backup_pics = $data["pics"] = $this->singleImageUpload($pics, "uploads/categories/");

            Category::create($data);

            $request->session()->flash("success", "Category Created Successfully ! ! !");

            return redirect()->route("admin.categoryList");


        }catch(\Exception $error){

            @unlink("uploads/categories/".$backup_icon);
            @unlink("uploads/categories/".$backup_pics);

            $request->session()->flash("error", $error->getMessage());
            return redirect()->back()->withInput($request->all());

        }
        
    }



    public function editCategory(Request $request, Category $category){

        $data["category"]   = $category;
        $data["categories"] = Category::where("id", "!=", $category->id)
                                        ->whereStatus("Active")
                                        ->get();

        return view("admin.pages.category.edit-category", compact("data"));

    }



    public function editCategoryProcess(Request $request, Category $category){

        $this->validateCategory($request, "update", $category->id);

        try{

            $category->category_id  = $request->parent;
            $category->name         = $request->name;
            $category->description  = $request->desc;
            $category->order    = $request->order;
            $category->status   = $request->status;
            // $category->seo_title  = $request->seo_title;
            // $category->seo_keywords  = $request->seo_keywords;
            // $category->seo_description  = $request->seo_desc;
            $category->updated_at       = date("Y-m-d H:i:s");

            $icon = $request->file('icon');
            $pics = $request->file('pics');

            $backup_icon = "";
            $backup_pics = "";

            if($icon != null):

                $old_icon = "uploads/categories/".$category->icon;
                $backup_icon = $category->icon = $this->singleImageUpload($icon, "uploads/categories/");

            endif;

            if($pics != null):

                $old_pics = "uploads/categories/".$category->pics;
                $backup_pics = $category->pics = $this->singleImageUpload($pics, "uploads/categories/");

            endif;

            $category->update();

            if($icon != null) @unlink($old_icon);
            if($pics != null) @unlink($old_pics);

            $request->session()->flash('success', 'Category Updated Successfully ! ! !');
            return redirect()->route('admin.categoryList');

        }catch(\Exception $error){

            @unlink("uploads/categories/".$backup_icon);
            @unlink("uploads/categories/".$backup_pics);

            $request->session()->flash("error", $error->getMessage());
            return redirect()->back()->withInput($request->all());

        }

    }


    
    public function deleteCategory(Request $request){

        $id = $request->id;

        try{

            $category = Category::with(["child:id,category_id,icon,pics"])->find($id);

            if($category->child->count() > 0):

                return response()->json([
                                        "success" => false,
                                        "message" => "Have Submenu, Cannot Delete ! ! !"
                                    ]);

            endif;

            $icon = "uploads/categories/".$category->icon;
            $pics = "uploads/categories/".$category->pics;

            $category->delete();

            @unlink($icon);
            @unlink($pics);

            return response()->json([
                                        "success" => true,
                                        "message" => "Category Deleted Successfully ! ! !"
                                    ]);

        }catch(\Exception $error){

            return response()->json([
                                        "success" => false,
                                        "message" => $error->getMessage()
                                    ]);

        }

    }


}
