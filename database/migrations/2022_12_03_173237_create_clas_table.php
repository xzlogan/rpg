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
        Schema::create('clas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 45)->nullable()->default(null);
            $table->longText('apelido')->nullable()->default(null);
            $table->longText('descricao')->nullable()->default(null);
            $table->longText('quemSao')->nullable()->default(null);
            $table->longText('disciplinas')->nullable()->default(null);
            $table->longText('fraqueza')->nullable()->default(null);
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
        Schema::dropIfExists('clas');
    }
};
