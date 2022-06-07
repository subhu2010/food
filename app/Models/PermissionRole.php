<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permissions;
use App\Models\Roles;


class PermissionRole extends Model{

    use HasFactory;


    protected $table = "permission_role";


	protected $fillable = [
		"permission_id", "role_id"
	];


	public function permissions(){
		return $this->belongsTo(Permissions::class);
	}


	public function roles(){
		return $this->belongsTo(Roles::class);
	}

}
