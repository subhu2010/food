<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration{

    public function up(){

        Schema::create('banners', function(Blueprint $table){
            $table->id();
            $table->string("name");
            $table->string("slug");
            $table->string("pics");
            $table->text("description")->nullable();
            $table->string("link")->nullable();
            $table->enum("status", ["Active", "Banned"])->default("Banned");
            $table->timestamps();
        });

    }

    public function down(){
        Schema::dropIfExists('banners');
    }


}
