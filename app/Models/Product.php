<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'primary_image', 'price', 'description', 'status', 'is_trending', 'is_recommended', 'sub_category_id', 'discount', 'is_veg'];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }

    use HasFactory;
}
