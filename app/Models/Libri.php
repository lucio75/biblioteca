<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libri extends Model
{
    protected $table='libri';

    public function autore(){
        return $this->belongsTo('App\Models\Autori','autore_id');
    }
    public function miLeggono(){
        return $this->belongsToMany('App\Utenti','prestiti','libro_id','utente_id');
    }
}
