<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductGallerTable extends Migration{

    public function up(){

        Schema::create('product_gallery', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string("pics");
            $table->timestamps();

            $table->foreign('product_id')
                    ->references('id')
                    ->on('products')
                    ->onDelete('cascade');

        });

    }

    public function down(){
        Schema::dropIfExists('product_gallery');
    }

}
