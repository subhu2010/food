<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model{

    use HasFactory;

    protected $table = "news";

	protected $fillable = [
								"name", "slug", "pics", "description", "status", "post_by", "time", "seo_title", 
								"seo_keywords", "seo_description", "created_at", "updated_at"
							];

	public function scopeStatus($query, $value = "Active"){
		return $query->whereStatus($value);
	}


}
