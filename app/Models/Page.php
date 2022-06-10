<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model{

    use HasFactory;

    protected $table = "pages";


    protected $fillable = [
                            "name", "slug", "pics", "description", "page", "status", "order", "seo_title", 
                            "seo_keywords", "seo_description", "created_at", "updated_at"
                        ];


    public function child(){
        return $this->hasMany(self::class, "page_id");
    }


    public function parent(){
        return $this->belongsTo(self::class, "page_id");
    }


    public function scopeStatus($query, $value = "Active"){
        return $query->whereStatus($value);
    }
    

}
