<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model{

    use HasFactory;

    protected $table = "banners";

    protected $fillable = ["name", "slug", "pics", "description", "link", "status", "created_at", "updated_at"];


    public function scopeStatus($query, $status = "Active"){
        return $query->whereStatus($status);
    }

}
