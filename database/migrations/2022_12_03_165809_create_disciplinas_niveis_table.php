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
        Schema::create('disciplinas_niveis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_disciplina');
            $table->string('titulo', 45)->nullable()->default(null);
            $table->integer('nivel')->nullable()->default(null);
            $table->text('descricao')->nullable()->default(null);
            $table->string('dados', 45)->nullable()->default(null);
            $table->text('custo')->nullable()->default(null);
            $table->text('sistema')->nullable()->default(null);
            $table->text('duracao')->nullable()->default(null);
            $table->timestamps();
            $table->foreign('id_disciplina')->references('id')->on('disciplinas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('disciplinas_niveis', function (Blueprint $table) {

            $table->dropForeign('disciplinas_niveis_id_disciplina_foreign');
        });
        Schema::dropIfExists('disciplinas_niveis');
    }
};
