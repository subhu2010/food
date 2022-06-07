<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminRoleTable extends Migration{

    public function up(){

        Schema::create('admin_role', function (Blueprint $table){

            $table->bigInteger('admin_id')->unsigned();
            $table->bigInteger('role_id')->unsigned();
            $table->timestamps();

            $table->foreign('admin_id')
            		->references('id')
            		->on('admins')
            		->onDelete('cascade');

           	$table->foreign('role_id')
           			->references('id')
           			->on('roles')
           			->onDelete('cascade');

        });

    }

    public function down(){

        Schema::dropIfExists('admin_role');

    }
    
}
