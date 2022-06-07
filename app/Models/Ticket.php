<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['message', 'status', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
