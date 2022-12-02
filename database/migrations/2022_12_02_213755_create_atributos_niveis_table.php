<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atributos_niveis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_atributos');
            $table->integer('nivel')->nullable();
            $table->string('descricao', 45)->nullable();
            $table->timestamps();

            $table->foreign('id_atributos')->references('id')->on('atributos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table('atributos_niveis', function (Blueprint $table){
             
            $table->dropForeign('atributos_niveis_id_atributos_foreign'); 
            
             
        });
        Schema::dropIfExists('atributos_niveis');
    }
};
