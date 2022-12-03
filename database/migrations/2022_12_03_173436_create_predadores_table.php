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
        Schema::create('predadores', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 45)->nullable()->default(null);
            $table->text('apelido');
            $table->longText('descricao')->nullable()->default(null);
            $table->longText('vantagem')->nullable()->default(null);
            $table->text('caca');
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
        Schema::dropIfExists('predadores');
    }
};
