<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Product};


class Category extends Model{

    use HasFactory;

    protected $table = "categories";


    protected $fillable = [
                            "category_id", "name", "slug", "icon", "pics", "description", "status", "order",
                            "created_at", "updated_at"
                            ];


    public function child(){
        return $this->hasMany(self::class, "category_id");
    }


    public function parent(){
        return $this->belongsTo(self::class, "category_id");
    }


    public function product(){
        return $this->hasMany(Product::class, "category_id");
    }


    public function scopeStatus($query, $value = "Active"){
        return $query->whereStatus($value);
    }

}
