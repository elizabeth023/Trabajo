<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    //
    protected $fillable=[ 'nombre', 'ape_paterno','ape_materno', 'edad'];
    protected $table = 'usuario';

    public function direccion()
    {
     return $this->belongsToMany(direccion::class);
    }
}
