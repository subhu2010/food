<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = "staffs";
    protected $fillable = ['name', 'image', 'address', 'email', 'contact_number', 'password'];
    protected $hidden = ['password'];
    use HasFactory;
}
