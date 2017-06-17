<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autori extends Model
{
    protected $table='autori';

    public function libri()
    {
        return $this->hasMany('App\Models\Libri','autore_id');
    }
}
