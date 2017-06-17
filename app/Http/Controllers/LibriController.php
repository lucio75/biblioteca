<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibriController extends Controller
{
    public function inPrestito()
    {
        $data['utente'] = \App\Utenti::find(1);
        return view('prestiti.inprestito', $data);
    }

    public function quantiMiLeggono()
    {
        $data['libro'] = \App\Models\Libri::find(1);
        return view('prestiti.leggono', $data);
    }
}
