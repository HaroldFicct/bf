<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('autor');
            $table->string('anioEdicion');
            $table->string('cantPag');
            $table->integer('cantidad'); // Cambiado a integer para representar la cantidad
            $table->string('editor');
            $table->boolean('conDisco'); // Cambiado a boolean para representar si tiene disco o no
            $table->unsignedBigInteger('categoriaId')->nullable(); // Agregada la columna para la clave foránea
            $table->timestamps();

          //  $table->foreign('categoriaId')->references('id')->on('categorias');
          $table->foreign('categoriaId')
                  ->references('id')
                  ->on('categorias')
                  ->onDelete('set null'); // Configurar la acción onDelete para establecer null
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
