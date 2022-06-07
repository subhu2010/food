<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CakeImages extends Model
{
    protected $fillable = ['image_name', 'cake_id'];
    use HasFactory;
}
