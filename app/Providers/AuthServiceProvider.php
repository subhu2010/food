<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Permissions;
use App\Models\AdminRole;
use Schema;


class AuthServiceProvider extends ServiceProvider{
    
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    
    public function boot(){

        $this->registerPolicies();

        foreach($this->getPermissions() as $permission){

            Gate::define($permission->label, function($user) use ($permission){

                return $this->hasPermission($user->id, $permission->id);

            });

        }

    }

    protected function getPermissions(){

        if(Schema::hasTable('permissions')){
            return Permissions::all();
        }
        return [];

    }


    public function hasPermission($admin_id, $plabel){

        $valid = AdminRole::join('admins', 'admins.id', 'admin_role.admin_id')
                            ->join('roles', 'roles.id', 'admin_role.role_id')
                            ->join('permission_role', 'roles.id', 'permission_role.role_id')
                            ->select('permission_role.*')
                            ->where('admins.id', $admin_id)
                            ->get();

        foreach($valid as $v):
            return $v->permission_id == $plabel;
        endforeach;

    }
    
}
