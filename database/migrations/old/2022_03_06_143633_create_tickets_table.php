<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration{

    public function up(){

        Schema::create('tickets', function(Blueprint $table){
            $table->id();
            $table->text('message');
            $table->enum('status', ['opened', 'closed'])->default('opened');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('SET NULL');
            $table->timestamps();
        });

    }


    public function down(){
        Schema::dropIfExists('tickets');
    }

    
}
