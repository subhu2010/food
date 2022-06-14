<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration{

    public function up(){

        Schema::create('products', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger("category_id");
            $table->enum("type", ["breakfast", "lunch", "dinner"])->default("lunch");
            $table->string("name");
            $table->string("slug");
            $table->string("thumb");
            $table->string("pics");
            $table->text("description")->nullable();
            $table->integer("price")->default(0);
            $table->integer("discount")->default(0);
            $table->enum("status", ["Active", "Banned"])->default("Banned");
            $table->enum("surprise", ["Yes", "No"])->default("No");
            $table->enum("trending", ["Yes", "No"])->default("No");
            $table->enum("recommended", ["Yes", "No"])->default("No");
            $table->enum("veg", ["Yes", "No"])->default("No");
            $table->timestamps();

            $table->foreign("category_id")
                    ->references("id")
                    ->on("categories")
                    ->onDelete("cascade");

        });

    }


    public function down(){
        Schema::dropIfExists('products');
    }

}
