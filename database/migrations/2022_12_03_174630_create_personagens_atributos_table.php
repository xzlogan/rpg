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
        Schema::create('personagens_atributos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_personagem')->nullable();
            $table->unsignedBigInteger('id_atributos')->nullable(); 
            $table->integer('nivel')->nullable();
            $table->string('especializacao', 45)->nullable();
            $table->timestamps();


            //referencia da tabela personagem_atributos com a tabela personagem
            $table->foreign('id_personagem')->references('id')->on('personagens');
             

            //referencia da tabela personagem_atributos com a tabela disciplina
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
        Schema::table('personagens_atributos', function (Blueprint $table){
             
            $table->dropForeign('personagens_atributos_id_personagem_foreign'); 
            $table->dropForeign('personagens_atributos_id_atributos_foreign'); 
            
             
        });
        Schema::dropIfExists('personagens_atributos');
    }
};
