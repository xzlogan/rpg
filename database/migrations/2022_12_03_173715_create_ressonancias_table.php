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
        Schema::create('ressonancias', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 45)->nullable()->default(null);
            $table->text('descricao')->nullable()->default(null);
            $table->text('vantagem')->nullable()->default(null);
            $table->string('ressonaciacol', 45)->nullable()->default(null);
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
        Schema::dropIfExists('ressonancias');
    }
};
