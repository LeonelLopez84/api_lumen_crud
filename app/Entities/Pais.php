<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'pais';
    public $timestamps = false;

    public function Clientes()
    {
        return $this->hasMany('App\Entities\Clientes','Pais','ID');
    }
}


