<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToppingsTable extends Migration{

    public function up(){

        Schema::create('toppings', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger("category_id");
            $table->string("name");
            $table->integer("price");
            $table->timestamps();
        });

    }


    public function down(){
        Schema::dropIfExists('toppings');
    }

}
