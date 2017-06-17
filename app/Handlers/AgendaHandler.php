<?php
namespace App\Handlers;

use Illuminate\Http\Request;

use Validator;

class AgendaHandler
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function datiValidi()
    {
        $valida = Validator::make($this->request->all(), [
            'nome' => 'required'
            , 'cognome' => 'required'
            , 'email' => 'required|email'
            , 'telefono' => 'required'
        ],
            [
                'nome.required' => 'Il nome è obbligatorio!'
                , 'cognome.required' => 'Per favore, anche il cognome'
                , 'email.required' => 'E l\'email è importante'
                , 'telefono.required' => 'Per favore, inserisci il numero di telefono'
                , 'email.email' => 'L\'email non è in formato corretto'
            ]);

        if ($valida->fails()) {
            return $valida->errors();
        }
        return true;
    }
    public function recuperaDati($agenda){
           $agenda->nome = $this->request->input('nome');
        $agenda->cognome = $this->request->input('cognome');
         $agenda->email = $this->request->input('email');
         $agenda->telefono = $this->request->input('telefono');
         return $agenda;
     }

     public function inserisciDati(){
             $agenda = new \App\Agenda();
        $this->recuperaDati($agenda);
         $agenda->save();
     }

     public function aggiornaDati($id){
             $agenda = \App\Agenda::find($id);
        $this->recuperaDati($agenda);
         $agenda->save();
     }

}