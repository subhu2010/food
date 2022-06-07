<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cake extends Model
{
    protected $fillable = ['name', 'slug', 'price', 'discount', 'description', 'primary_image', 'size', 'status'];

    public function cakeImages()
    {
        return $this->hasMany(CakeImages::class);
    }
    use HasFactory;
}
