<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model{

	
    use HasFactory;


    protected $table = "news";

	protected $fillable = [
		"name", "permalink", "pics", "description", "post_by", "status", 
		"seo_title", "seo_keywords", "seo_description", "created_at", "updated_at"
	];


}
