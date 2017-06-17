<?php

namespace App\Http\Controllers;
use App\Models\Autori;

use App\Models\Libri;
use Illuminate\Http\Request;

class AutoriController extends Controller
{
    public function autori()
    {
        $autori=Autori::all();
        foreach ($autori as $la)
        {
            echo $la['nome'].' '.$la['cognome'].'<br/>';
        }
        //return view('autori.autori');

    }

    public function listaLibri(){

        $listaLibri = Autori::find(5)->libri()->get();

        foreach($listaLibri as $li)
        {
            echo $li['nome'].' '.$li['descrizione'].'<br/>';
        }
    }

    public function qualeAutore(){

        $autore = Libri::find(5)->autore->nome;
        echo $autore;

    }

    public function bigList(){
        $mieilibri=Libri::all();
        return view('libri.lista',compact('mieilibri'));
    }
}
