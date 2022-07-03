<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Product, User};


class Bucket extends Model{


    use HasFactory;

    protected $table = "buckets";

    protected $fillable = [ 
                            "user_id", "product_id", "discount", "price", "quantity", "type",
                            "created_at", "updated_at"
                            ];


    public function user(){
        return $this->belongsTo(User::class, "user_id");
    }


    public function product(){
        return $this->belongsTo(Product::class, "product_id");
    }


}
