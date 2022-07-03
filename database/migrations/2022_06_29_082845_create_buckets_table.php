<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBucketsTable extends Migration{

    public function up(){

        Schema::create('buckets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->bigInteger('discount');
            $table->bigInteger('price');
            $table->bigInteger('quantity');
            $table->enum("type", ["wish", "cart"])->default("wish");
            $table->timestamps();

            $table->foreign("user_id")
                    ->references("id")
                    ->on("users")
                    ->onDelete("cascade");

            $table->foreign("product_id")
                    ->references("id")
                    ->on("products")
                    ->onDelete("cascade");

        });

    }

    public function down(){
        Schema::dropIfExists('buckets');
    }

}
