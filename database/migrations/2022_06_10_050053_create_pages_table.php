<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration{

    public function up(){

        Schema::create('pages', function(Blueprint $table){
            $table->id();
            $table->bigInteger("page_id")->unsigned()->nullable();
            $table->string("name");
            $table->string("slug");
            $table->string("pics")->nullable();
            $table->text("description")->nullable();
            $table->string("page")->default("common-page");
            $table->enum("status", ["Active", "Banned"])->default("Banned");
            $table->integer("order")->default(0);
            $table->string("seo_title")->nullable();
            $table->string("seo_keywords")->nullable();
            $table->string("seo_description")->nullable();
            $table->timestamps();

            $table->foreign("page_id")
                    ->references("id")
                    ->on("pages")
                    ->restrictOnDelete();

        });

    }

    public function down(){
        Schema::dropIfExists('pages');
    }

}
