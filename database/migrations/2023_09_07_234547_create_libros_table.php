<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('autor');
            $table->string('anioEdicion');
            $table->string('cantPag');
            $table->integer('cantidad'); // Cambiado a integer para representar la cantidad
            $table->string('editor');
            $table->boolean('conDisco'); // Cambiado a boolean para representar si tiene disco o no
            $table->unsignedBigInteger('categoriaId'); // Agregada la columna para la clave foránea
            $table->timestamps();

            $table->foreign('categoriaId')->references('id')->on('categorias');
        });
    }

    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
