<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';
    public $timestamps = false;

    public function getEjecutivo()
    {
        return $this->belongsTo('App\Entities\Ejecutivos','EjecutivoAtiende','ID');
    }

    public function getEstado()
    {
        return $this->belongsTo('App\Entities\Estados','Estado','ID');
    }

    public function getPais()
    {
        return $this->belongsTo('App\Entities\Pais','Pais','ID');
    }
}
