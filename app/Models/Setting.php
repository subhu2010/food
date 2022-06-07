<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Setting extends Model{

    use HasFactory;

    protected $table = "setting";

    protected $fillable = ["name", "logo", "email", "address", "phone", "contact", "facebook", "instagram", "youtube", 
    						"linkedin", "tiktok", "created_at", "updated_at"];

}
