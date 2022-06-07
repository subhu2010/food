<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $products = Product::with('subCategory', 'productImages')->get();
        return view('admin.Product.index', ['products' => $products]);
    }

    public function create()
    {
        $categories = SubCategory::all();
        return view('admin.Product.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        // return json_decode($request->ingredient_name);
        $data = $this->productValidation($request);
        $product_images = $this->productImagesValidation($request);
        if ($request->primary_image) {
            $data['primary_image'] = uploadImage($request->primary_image, "Product", 350, 350);
        }
        $request->status ? $data['status'] = 'available' : $data['status'] = 'not-available';
        $request->is_recommended ? $data['is_recommended'] = true : $data['is_recommended'] = false;
        $request->is_trending ? $data['is_trending'] = true : $data['is_trending'] = false;
        $request->is_veg ? $data['is_veg'] = true : $data['is_veg'] = false;
        $product = Product::create($data);
        if ($product) {
            foreach (json_decode($request->ingredient_name) as $ing) {
                $ingredrient['ingredient_name'] = $ing->value;
                $ingredrient['product_id'] = $product->id;
                Ingredient::create($ingredrient);
            }
            if ($request->image_name) {
                foreach ($request->image_name as $img) {
                    $product_images['image_name'] = uploadImage($img, "Product", 350, 350);
                    $product_images['product_id'] = $product->id;
                    ProductImage::create($product_images);
                }
            }
            $request->session()->flash('success', "Product Created Successfully !!!");
        } else $request->session()->flash('error', "Failed to create product !!!");
        return redirect()->route('admin.product.index');
    }

    public function show(Product $product)
    {
        $product = Product::with('subCategory', 'productImages')->findOrFail($product->id);
        return view('admin.Product.detail', ['product' => $product]);
    }

    public function edit(Product $product)
    {
        $product = Product::with('productImages', 'ingredients', 'subCategory')->findOrFail($product->id);
        $categories = SubCategory::all();
        return view('admin.Product.create', [
            'categories' => $categories,
            'product' => $product
        ]);
    }

    public function update(Request $request, Product $product)
    {
        return $request->all();
        $data = $this->productValidation($request, 'update');
        $product_images = $this->productImagesValidation($request);
        if ($request->primary_image) {
            deleteImage($product->primary_iamge, "Product");
            $data['primary_image'] = uploadImage($request->primary_image, "Product", 350, 350);
        }
        $request->status ? $data['status'] = 'available' : $data['status'] = 'not-available';
        $request->is_recommended ? $data['is_recommended'] = true : $data['is_recommended'] = false;
        $request->is_trending ? $data['is_trending'] = true : $data['is_trending'] = false;
        $request->is_veg ? $data['is_veg'] = true : $data['is_veg'] = false;
        $success = $product->update($data);
        if ($success) {
            foreach (json_decode($request->ingredient_name) as $ing) {
                $ingredrient['ingredient_name'] = $ing->value;
                $ingredrient['product_id'] = $product->id;
                Ingredient::create($ingredrient);
            }
            if ($request->image_name) {
                foreach ($request->image_name as $img) {
                    $product_images['image_name'] = uploadImage($img, "Product", 350, 350);
                    $product_images['product_id'] = $product->id;
                    ProductImage::create($product_images);
                }
            }
            $request->session()->flash('success', "Product Updated Successfully !!!");
        } else $request->session()->flash('error', "Failed to update product !!!");
        return redirect()->route('admin.product.index');
    }

    public function destroy(Product $product)
    {
        if ($product) {
            $product_image = $product->primary_image;
            $other_images = $product->productImages;
            $success = $product->delete();
            if ($success) {
                deleteImage($product_image, "Product");
                foreach ($other_images as $img) {
                    deleteImage($img->image_name, "Product");
                }
                request()->session()->flash('success', 'Product Deleted Successfully !!!');
            } else request()->session()->flash('error', 'Failed to delete product');
        } else request()->session()->flash('error', "Product Not Found");
        return redirect()->route('admin.product.index');
    }

    public function productValidation(Request $request, $option = 'add')
    {
        return $this->validate($request, [
            'name' => 'required|string',
            'primary_image' => ($option == 'add' ? 'required' : 'sometimes') . '|image|max:5000',
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
            'description' => 'required',
            'status' => 'sometimes',
            'sub_category_id' => 'integer|sometimes|nullable',
            'is_recommended' => 'sometimes',
            'is_trending' => 'sometimes',
            'ingredient_name' => 'required',
            'is_veg' => 'sometimes'
        ]);
    }

    public function productImagesValidation(Request $request)
    {
        return $this->validate($request, [
            'image_name' => 'sometimes',
            'image_name.*' => 'image|max:5000'
        ]);
    }
}
