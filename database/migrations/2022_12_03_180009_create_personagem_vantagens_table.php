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
        Schema::create('personagem_vantagens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_personagem')->nullable();
            $table->unsignedBigInteger('id_vantagem')->nullable(); 
            $table->timestamps();


            //referencia da tabela personagem_vantagens com a tabela personagem
            $table->foreign('id_personagem')->references('id')->on('personagens');
             

            //referencia da tabela personagem_vantagens com a tabela disciplina
            $table->foreign('id_vantagem')->references('id')->on('vantagens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personagem_vantagens', function (Blueprint $table){
             
            $table->dropForeign('personagem_vantagens_id_personagem_foreign'); 
            $table->dropForeign('personagem_vantagens_id_vantagem_foreign'); 
            
             
        });
        Schema::dropIfExists('personagem_vantagens');
    }
};
