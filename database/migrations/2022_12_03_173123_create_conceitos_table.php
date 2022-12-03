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
        Schema::create('conceitos', function (Blueprint $table) {
            $table->id(); 
            $table->string('titulo', 45)->nullable()->default(null);
            $table->string('descricao', 45)->nullable()->default(null);
            $table->string('requisito', 45)->nullable()->default(null);
            $table->string('bonus', 45)->nullable()->default(null); 
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
        Schema::dropIfExists('conceitos');
    }
};
