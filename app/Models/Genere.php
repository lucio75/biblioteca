<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genere extends Model
{
    protected $table ='genere';
    public function generable(){
        return $this->morphTo();
    }
}
