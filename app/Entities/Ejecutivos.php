<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Ejecutivos extends Model
{
     protected $table = 'ejecutivo_ventas';
    public $timestamps = false;

    public function Clientes()
    {
        return $this->hasMany('App\Entities\Clientes','EjecutivoAtiende','ID');
    }
}
