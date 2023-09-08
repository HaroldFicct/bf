<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    public function categorias(){
        return $this->belongsTo(Categoria::class,'categoriaId');
    }
}
