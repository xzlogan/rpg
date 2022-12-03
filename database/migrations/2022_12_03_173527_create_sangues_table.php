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
        Schema::create('sangues', function (Blueprint $table) {
            $table->id();
            $table->integer('nivel')->nullable()->default(null);
            $table->string('surto', 45)->nullable()->default(null);
            $table->string('regenerar', 45)->nullable()->default(null);
            $table->string('bonus', 45)->nullable()->default(null);
            $table->string('rerolar', 45)->nullable()->default(null);
            $table->string('penalidade', 45)->nullable()->default(null);
            $table->string('sanguecol', 45)->nullable()->default(null);
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
        Schema::dropIfExists('sangues');
    }
};
