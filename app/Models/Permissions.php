<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PermissionRole;


class Permissions extends Model{

    use HasFactory;

    protected $table = "permissions";


	protected $fillable = [
		"name", "label", "created_at", "updated_at"
	];


	public function permission_role(){

		return $this->hasMany(PermissionRole::class);

	}

}
