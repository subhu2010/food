<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Notifications\AdminResetPasswordNotification;


class Admin extends Authenticatable{

    use HasFactory, Notifiable;

    protected $guard = "admin";


    protected $fillable = ['name', 'profile', 'email', 'password', 'address' ,'contact', 'status', 'verified', 'created_at', 'updated_at' ];

    protected $hidden = ['password', 'remember_token'];



    public function sendPasswordResetNotification($token){
        $this->notify(new AdminResetPasswordNotification($token));
    }


}
