<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CakeBanner extends Model
{
    protected $fillable = ['title', 'image', 'status', 'description'];
    use HasFactory;
}
