<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class direccion extends Model
{
    //
    protected $fillable=[ 'calle', 'colonia','delegacion', 'numero', 'usuario'];
    protected $table = 'direccion';

    public function usuario()
    {
     return $this->belongsToMany(usuario::class);
    }
}
