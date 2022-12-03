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
        Schema::create('personagens', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 45)->nullable()->default(null);
            $table->string('conceito', 45)->nullable()->default(null);
            $table->string('cronica', 45)->nullable()->default(null);
            $table->string('ambicao', 45)->nullable()->default(null);
            $table->string('desejo', 45)->nullable()->default(null);
            $table->string('senhor', 45)->nullable()->default(null);
            $table->string('geracao', 45)->nullable()->default(null);
            $table->integer('vida')->nullable()->default(null);
            $table->integer('forcavontade')->nullable()->default(null);
            $table->integer('humanidade')->nullable()->default(null);
            $table->integer('fome')->nullable()->default(null);
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_predador');  
            $table->unsignedBigInteger('id_ressonancia');   
            $table->unsignedBigInteger('id_sangue');  
            $table->unsignedBigInteger('id_cla'); 
            $table->timestamps();

            //referencia da tabela personagem com a tabela user
            $table->foreign('id_usuario')->references('id')->on('users');

            //referencia da tabela personagem com a tabela predador
            $table->foreign('id_predador')->references('id')->on('predadores');
             

            //referencia da tabela personagem com a tabela ressonancia
            $table->foreign('id_ressonancia')->references('id')->on('ressonancias');
             

             //referencia da tabela personagem com a tabela sangue
            $table->foreign('id_sangue')->references('id')->on('sangues');
             
             //referencia da tabela personagem com a tabela cla
            $table->foreign('id_cla')->references('id')->on('clas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personagens', function (Blueprint $table){
             
            $table->dropForeign('personagens_id_usuario_foreign');
            $table->dropForeign('personagens_id_predador_foreign');
            $table->dropForeign('personagens_id_ressonancia_foreign');
            $table->dropForeign('personagens_id_sangue_foreign');
            $table->dropForeign('personagens_id_cla_foreign'); 
            
          
           
            
            
             
        });
        Schema::dropIfExists('personagens');
    }
};
