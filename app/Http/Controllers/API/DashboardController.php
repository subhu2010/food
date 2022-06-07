<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Cake;
use App\Models\CakeBanner;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $banners = Banner::where('status', 'active')->get();
        $trending_product = Product::with('subCategory', 'subCategory.category', 'productImages')->where('is_trending', true)->get();
        $recommended_product = Product::with('subCategory', 'subCategory.category', 'productImages')->where('is_recommended', true)->get();
        $categories = Category::all();
        $subCategories = SubCategory::all();
        return response()->json([
            'banners' => $banners,
            'recommended' => $recommended_product,
            'trending' => $trending_product,
            'categories' => $categories,
            'sub_categories' => $subCategories,
            'status' => true
        ], 200);
    }

    public function products()
    {
        $products = Product::with('productImages', 'subCategory', 'subCategory.category', 'ingredients')->get();
        $product_categories = SubCategory::with('products')->get();
        $veg_products = Product::with('productImages', 'subCategory', 'subCategory.category', 'ingredients')
            ->where('is_veg', true)->get();
        $nonveg_products = Product::with('productImages', 'subCategory', 'subCategory.category', 'ingredients')
            ->where('is_veg', false)->get();
        return response()->json([
            'products' => $products,
            'productCategories' => $product_categories,
            'vegProducts' => $veg_products,
            'nonvegProducts' => $nonveg_products,
            'status' => true
        ], 200);
    }

    public function productById($product_id)
    {
        $product = Product::with('subCategory', 'productImages', 'subCategory.category', 'ingredients')->findOrFail($product_id);
        return response()->json([
            'product' => $product,
            'status' => true
        ], 200);
    }

    public function cakes()
    {
        $cakebanners = CakeBanner::all();
        $cakes = Cake::with('cakeImages')->get();
        return response()->json([
            'cakes' => $cakes,
            'cakebanners' => $cakebanners
        ], 200);
    }

    public function cakeById($cake_id)
    {
        $cake = Cake::with('cakeImages')->findOrFail($cake_id);
        return response()->json([
            'cake' => $cake
        ], 200);
    }
}
