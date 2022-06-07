<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserImage extends Model
{
    protected $fillable = ['image_name', 'image_type', 'user_id'];
    use HasFactory;
}
