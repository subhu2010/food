<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = ['ingredient_name', 'product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    use HasFactory;
}
