<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{ProductGallery, Category};


class Product extends Model{

    use HasFactory;

    protected $table = "products";


    protected $fillable = [
                            "category_id", "type", "name", "slug", "thumb", "pics", "description", "status", 
                            "price", "discount", "surprise", "trending", "recommend", "veg", 
                            "created_at", "updated_at"
                        ];


    public function category(){
        return $this->belongsTo(Category::class, "category_id");
    }


    public function gallery(){
        return $this->hasMany(ProductGallery::class, "product_id");
    }


    public function ingredients(){
        return $this->hasMany(Ingredient::class, "product_id");
    }

}
