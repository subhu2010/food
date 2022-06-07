<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration{
    
    public function up(){

        Schema::create('users', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('contact_number')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->text('bio')->nullable();
            $table->string('password');
            $table->string('otp')->nullable();
            $table->enum('verified',['1', '0'])->default('0');
            $table->string('address')->nullable();
            $table->string("social_id")->nullable();
            $table->string("social_type")->nullable();
            $table->string("facebook")->nullable();
            $table->string("instagram")->nullable();
            $table->string("twitter")->nullable();
            $table->string("youtube")->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

    }

    public function down(){
        Schema::dropIfExists('users');
    }

}
