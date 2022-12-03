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
        Schema::create('habilidades_niveis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_habilidades');
            $table->integer('nivel')->nullable();
            $table->string('descricao', 45)->nullable();
            $table->timestamps();
            $table->foreign('id_habilidades')->references('id')->on('habilidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('habilidades_niveis', function (Blueprint $table) {

            $table->dropForeign('habilidades_niveis_id_habilidades_foreign');
        });
        Schema::dropIfExists('habilidades_niveis');
    }
};
