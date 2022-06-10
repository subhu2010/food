<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration{

    public function up(){

        Schema::create('news', function(Blueprint $table){
            $table->id();
            $table->string("name");
            $table->string("slug");
            $table->string("pics");
            $table->text("description");
            $table->enum("status", ["Active","Banned"])->default("Banned");
            $table->string("post_by");
            $table->string("time");
            $table->string("seo_title")->nullable();
            $table->text("seo_keywords")->nullable();
            $table->text("seo_description")->nullable();
            $table->timestamps();
        });

    }

    public function down(){
        Schema::dropIfExists('news');
    }

}
