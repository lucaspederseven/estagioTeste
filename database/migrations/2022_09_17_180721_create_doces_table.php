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
        Schema::create('doces', function (Blueprint $table) {
           $table->id();
            $table->string('nome_produto');
            $table->string('preco_produto');
            $table->string('peso');
            $table->string('descricao');
            $table->dateTime('data');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doces');
    }
};
