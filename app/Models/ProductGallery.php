<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductGallery;


class ProductGallery extends Model{

    use HasFactory;

    protected $table = "product_gallery";

    protected $fillable = ["product_id", "pics", "created_at", "updated_at"];


    public function product(){
        return $this->belongsTo(Product::class, "product_id");
    }


}
