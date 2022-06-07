<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable{

    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = ['name', 'contact_number', 'email', 'address', 'password', 'bio', 'otp', 'verified', 'social_id', 'social_type', 'facebook',  'instagram', 'twitter', 'youtube', 'created_at', 'updated_at'];

    protected $hidden = ['password', 'remember_token', 'otp'];

    protected $casts = ['email_verified_at' => 'datetime',];

    public function userImages()
    {
        return $this->hasMany(UserImage::class);
    }
}
