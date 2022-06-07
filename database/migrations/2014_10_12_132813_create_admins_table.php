<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration{
    
    public function up(){

        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('profile')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->enum('status', ['Active', 'Banned'])->default('Banned');
            $table->enum('verified', ['0', '1'])->default('0');
            $table->rememberToken();
            $table->timestamps();
        });

    }

    public function down(){
        Schema::dropIfExists('admins');
    }

}
