<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function books(){
        return $this->hasMany(libro::class,'id');
    }
}
