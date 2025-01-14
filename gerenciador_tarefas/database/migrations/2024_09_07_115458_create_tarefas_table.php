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
    Schema::create('tarefas', function (Blueprint $table) {
        $table->id('i_a');
        $table->string('Titulo');
        $table->text('Descricao');
        $table->integer('Status')->default(1);
        $table->timestamps(); // Cria Data_Criacao e Data_atualizacao
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarefas');
    }
};
