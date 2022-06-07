<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingTable extends Migration{
    
    public function up()    {
        Schema::create('setting', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string("name");
            $table->string("logo")->nullable();
            $table->string("email")->nullable();
            $table->string("address")->nullable();
            $table->string("contact")->nullable();
            $table->string("phone")->nullable();
            $table->string("facebook")->nullable();  
            $table->string("instagram")->nullable();  
            $table->string("youtube")->nullable();  
            $table->string("linkedin")->nullable();  
            $table->string("tiktok")->nullable();  
            $table->timestamps();
        });
    }
 
    public function down(){
        Schema::dropIfExists('setting');
    }

}
