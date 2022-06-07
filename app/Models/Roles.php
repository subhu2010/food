<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AdminRole;
use App\Models\PermissionRole;


class Roles extends Model{

    use HasFactory;


    protected $table = "roles";


	protected $fillable = [
		"name", "label", "created_at", "updated_at"
	];


	public function adminRole(){

		return $this->hasMany(AdminRole::class);

	}


	public function permissionRole(){

		return $this->hasMany(PermissionRole::class);

	}

}
