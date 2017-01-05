<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';
    public $timestamps = false;

    public function Ejecutivo()
    {
        return $this->belongsTo('App\Entities\Ejecutivos','EjecutivoAtiende','ID');
    }

    public function Estado()
    {
        return $this->belongsTo('App\Entities\Estados','Estado','ID');
    }

    public function Pais()
    {
        return $this->belongsTo('App\Entities\Pais','Pais','ID');
    }
}
