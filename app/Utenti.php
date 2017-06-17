<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utenti extends Model
{
    protected $table='utenti';

    public function libriInPrestito(){
        return $this->belongsToMany('App\Models\Libri','prestiti','utente_id','libro_id');
    }
}
