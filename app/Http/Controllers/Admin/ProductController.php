<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Category, Product, ProductGallery};
use App\Trait\{ImageUpload, ValidateRequest};
use Illuminate\Support\Str;
use DB;


class ProductController extends Controller{

    use ImageUpload, ValidateRequest;


    public function productList(){

        $data['products'] = Product::with(["category:id,category_id,name"])->get();

        return view("admin.pages.product.product-list", compact("data"));

    }


    public function addProduct(){

        $data['categories'] = Category::status()->orderBy("name")->get();

        return view("admin.pages.product.add-product", compact("data"));

    }


    public function addProductProcess(Request $request){

        $this->validateProduct($request);

        try{

            $data = [ 
                "category_id" => $request->category,
                "type" => $request->type,
                "name" => $request->name,
                "slug" => strtolower(Str::slug($request->name).'-'.Str::random(5)),
                "description" => $request->desc,
                "price"    => $request->price,
                "discount" => $request->discount,
                "serving_size" => $request->serving_size,
                "ingredient"   => $request->ingredient,
                "status"    => $request->status,
                "veg"       => $request->veg,
                "surprise"  => $request->surprise,
                "trending"  => $request->trending,
                "recommend" => $request->recommend,
                "seo_title" => $request->seo_title,
                "seo_keywords" => $request->seo_keywords,
                "seo_description" => $request->seo_desc,
                "created_at"      => date("Y-m-d H:i:s")
            ];

            $pics = $request->file('pics');

            $backup_thumb = "";
            $backup_pics = "";

            if($pics != null): 
                $backup_thumb = $data["thumb"] = $this->singleImageUploadThumb($pics, "uploads/products/");
                $backup_pics  = $data["pics"]  = $this->singleImageUpload($pics, "uploads/products/");
            endif;

            Product::create($data);

            $request->session()->flash('success', 'Product Created Successfully ! ! !');
            return redirect()->route('admin.productList');

        }catch(\Exception $error){

            @unlink("uploads/products/".$backup_thumb);
            @unlink("uploads/products/".$backup_pics);

            $request->session()->flash("error", $error->getMessage());

            return redirect()->back()->withInput($request->all());

        }

    }


    public function editProduct(Product $product, Request $request){

        $data['product'] = $product;

        $data['categories'] = Category::status()->orderBy("name")->get();

        return view("admin.pages.product.edit-product", compact("data"));

    }


    public function editProductProcess(Product $product, Request $request){

        $this->validateProduct($request, "update");

        try{

            $product->category_id = $request->category;
            $product->type = $request->type;
            $product->name = $request->name;
            $product->description = $request->desc;
            $product->price     = $request->price;
            $product->discount  = $request->discount;
            $product->status    = $request->status;
            $product->serving_size = $request->serving_size;
            $product->ingredient   = $request->ingredient;
            $product->veg       = $request->veg;
            $product->surprise  = $request->surprise;
            $product->trending  = $request->trending;
            $product->recommend = $request->recommend;
            $product->created_at = date("Y-m-d H:i:s");

            $pics = $request->file('pics');

            $backup_thumb = "";
            $backup_pics  = "";

            if($pics != null):

                $old_thumb = "uploads/products/".$product->thumb;
                $old_pics  = "uploads/products/".$product->pics;

                $backup_thumb = $data["thumb"] = $this->singleImageUploadThumb($pics, "uploads/products/");
                $backup_pics  = $data["pics"]  = $this->singleImageUpload($pics, "uploads/products/");

            endif;

            $product->update();

            if($pics != null):
                @unlink($old_thumb);
                @unlink($old_pics);
            endif;

            $request->session()->flash('success', 'Product Updated Successfully ! ! !');
            return redirect()->route('admin.productList');

        }catch(\Exception $error){

            @unlink("uploads/products/".$backup_thumb);
            @unlink("uploads/products/".$backup_pics);

            $request->session()->flash("error", $error->getMessage());
            return redirect()->back()->withInput($request->all());

        }


    }


    public function updateProductGallery(Request $request, Product $product){

        $data["product"] = $product;

        return view("admin.pages.product.update-product-gallery", $data);

    }


    public function updateProductGalleryProcess(Request $request, product $product){

        $request->validate([
                                "gallery"   => "required",
                                "gallery.*" => "image|mimes:png,jpg,jpeg,gif,webp|max:2048"
                            ], 
                            [
                                "gallery.required" => "Gallery is Required ! ! !",
                                "gallery.mimes"    => "Invalid Image Extension only accept(.png, .jpg, .jpeg, .gif, .webp)"
                            ]);

        try{

            $gallery = $this->multipleImageUpload($request->file("gallery"), "uploads/gallery/");

            $pro = [];

            if(count($gallery) > 0):
                foreach($gallery as $gal):
                    array_push($pro, ["product_id" => $product->id, "pics" => $gal]);
                endforeach;
            endif;

            ProductGallery::insert($pro);

            $request->session()->flash("success", "Product Gallery Successfully Uploaded ! ! !");

            return redirect()->route("admin.updateProductGallery", $product->id);

        }catch(\Exception $error){

            $request->session()->flash("error", $error->getMessage());

            return redirect()->route("admin.updateProductGallery", $product->id);

        }


    }



    public function deleteProduct(Request $request){

        $id = $request->id;

        try{

            $product = Product::with(["gallery"])->find($id);

            $thumb = "uploads/products/".$product->thumb;
            $pics  = "uploads/products/".$product->pics;

            @unlink($thumb);
            @unlink($pics);

            foreach($product->gallery as $gal):

                @unlink("uploads/gallery/".$gal->pics);

            endforeach;

            $product->delete();

            return response()->json([
                                        "success" => true,
                                        "message" => "Product Deleted Successfully ! ! !"
                                    ]);

        }catch(\Exception $error){

            return response()->json([
                                        "success" => false,
                                        "message" => $error->getMessage()
                                    ]);

        }

    }


    public function deleteProductGallery(Request $request){

        $id = $request->id;

        try{

            $gallery = ProductGallery::find($id);

            $link = "uploads/gallery/".$gallery->pics;

            $gallery->delete();

            @unlink($link);

            return response()->json([
                                        "success" => true,
                                        "message" => "Gallery Image Deleted Successfully ! ! !"
                                    ]);

        }catch(\Exception $error){

            return response()->json([
                                        "success" => false,
                                        "message" => $error->getMessage()
                                    ]);

        }

    }


    
}
