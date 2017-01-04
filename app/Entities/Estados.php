<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    protected $table = 'estados';
    public $timestamps = false;

    public function Clientes()
    {
        return $this->hasMany('App\Entities\Clientes','Estado','ID');
    }
}
