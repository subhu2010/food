<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration{

    public function up(){

        Schema::create('permissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
         	$table->string('label');
            $table->timestamps();
        });

    }

    public function down(){

        Schema::dropIfExists('permissions');

    }
    
}
