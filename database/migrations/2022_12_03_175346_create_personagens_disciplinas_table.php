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
        Schema::create('personagens_disciplinas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_personagem')->nullable();
            $table->unsignedBigInteger('id_disciplina')->nullable();
            $table->unsignedBigInteger('id_disciplina_nivel')->nullable();
            $table->timestamps();
            

            //referencia da tabela personagem_disciplina com a tabela personagem
            $table->foreign('id_personagem')->references('id')->on('personagens');
             

            //referencia da tabela personagem_disciplina com a tabela disciplina
            $table->foreign('id_disciplina')->references('id')->on('disciplinas');
             

             //referencia da tabela personagem_disciplina com a tabela nivelDisciplina
            $table->foreign('id_disciplina_nivel')->references('id')->on('disciplinas_niveis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personagens_disciplinas', function (Blueprint $table){
             
            $table->dropForeign('personagens_disciplinas_id_personagem_foreign'); 
            $table->dropForeign('personagens_disciplinas_id_disciplina_foreign');
            $table->dropForeign('personagens_disciplinas_id_disciplina_nivel_foreign');  
            
             
        });
        Schema::dropIfExists('personagens_disciplinas');
    }
};
