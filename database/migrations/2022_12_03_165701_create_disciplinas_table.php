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
        Schema::create('disciplinas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 45)->nullable()->default(null);
            $table->text('apelido')->nullable()->default(null);
            $table->text('descricao')->nullable()->default(null);
            $table->text('tipo')->nullable()->default(null);
            $table->text('mascara')->nullable()->default(null);
            $table->text('ressonancia')->nullable()->default(null);
            $table->text('quemSao')->nullable()->default(null);
            $table->text('arquetipos')->nullable()->default(null);
            $table->text('primaria')->nullable()->default(null);
            $table->text('secundaria')->nullable()->default(null);
            $table->text('terciaria')->nullable()->default(null);
            $table->text('fraqueza')->nullable()->default(null); 
            $table->text('organizacao')->nullable()->default(null); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disciplinas');
    }
};
