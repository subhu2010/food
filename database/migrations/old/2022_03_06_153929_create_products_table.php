<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('primary_image');
            $table->double('price');
            $table->text('description');
            $table->boolean('is_trending')->default(false);
            $table->boolean('is_recommended')->default(false);
            $table->double('discount')->default(0);
            $table->enum('status', ['available', 'not-available'])->default('available');
            $table->boolean('is_veg')->default(false);
            $table->unsignedBigInteger('sub_category_id')->nullable();
            $table->foreign('sub_category_id')->on('sub_categories')->references('id')->onDelete('SET NULL');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
