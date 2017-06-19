<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libri extends Model
{
    protected $table='libri';

    public function lista()
    {
        return \DB::table('libri')->simplePaginate(3);
    }

    public function listaEloquent()
    {
        return \App\Models\Libri::where('id','>',3)->paginate(15);
    }

}
