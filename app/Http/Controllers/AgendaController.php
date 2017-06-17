<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Handlers\AgendaHandler as Ah;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['listaNominativi']=\App\Agenda::all();
        return view ('agenda.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Ah $ah)
    {
        $esitoValidazioneDati = $ah->datiValidi();
           if ($esitoValidazioneDati === true) {
                 $ah->inserisciDati();
         return redirect('agenda')->with('ok_message', 'La tua rubrica è stata aggiornata con un nuovo utente');
     }
     return redirect('agenda/create')-$this->withErrors($esitoValidazioneDati)->withInput();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['datiRecuperati']=\App\Agenda::find($id);
        return view('agenda.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Ah $ah,$id)
    {
        $esitoValidazioneDati = $ah->datiValidi();
            if ($esitoValidazioneDati === true) {
               $ah->aggiornaDati($id);
        return redirect('agenda')->with('ok_message', 'La tua rubrica è stata aggiornata');
     }
     return redirect('agenda/'.$id.'/edit')->withErrors($esitoValidazioneDati)->withInput();
             
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Agenda::destroy($id);
            return redirect('agenda')->with('ok_message', 'La tua rubrica è stata aggiornata con un nuovo utente');
    }
}
