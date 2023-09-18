<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function categorias(){
        return $this->belongsTo(Categoria::class,'categoriaId');
    }
}
