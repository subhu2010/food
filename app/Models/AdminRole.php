<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;
use App\Models\Roles;


class AdminRole extends Model{

    use HasFactory;

    protected $table = "admin_role";


	protected $fillable = [
		"admin_id", "role_id"
	];


	public function admins(){

		return $this->belongsTo(Admin::class);

	}


	public function roles(){

		return $this->belongdTo(Roles::class);

	}

}
