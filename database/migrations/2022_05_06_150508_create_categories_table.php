<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration{

    public function up(){

        Schema::create('categories', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger("category_id")->nullable();
            $table->string('name');
            $table->string('slug');
            $table->string('icon');
            $table->string('pics')->nullable();
            $table->text('description')->nullable();
            $table->enum("status", ["Active", "Banned"])->default("Banned");
            $table->integer("order")->default(0);
            $table->timestamps();

            $table->foreign("category_id")
                    ->references("id")
                    ->on("categories")
                    ->restrictOnDelete();
        });

    }


    public function down(){
        Schema::dropIfExists('categories');
    }
    
}
