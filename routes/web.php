<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Authentication

Route::get('auth.login', 'Auth\AuthController@getLogin');
Route::post('auth.login', 'Auth\AuthController@postLogin');
Route::get('auth.logout', 'Auth\AuthController@getLogout');

// Registrazione
Route::get('auth.register', 'Auth\AuthController@getRegister');
Route::post('auth.register', 'Auth\AuthController@postRegister');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/homepage',function(){
    $data['nome']='Lucio';
   return view('homepage.index',$data);
});

Route::get('iscriviti', function(){
        return view('iscrizione.form');
 });
Route::post('iscriviti/dati', function(){
       $data = [
                 'nome' => Input::get('nome')
         ,'cognome' => Input::get('cognome')
     ];

    return view('iscrizione.recupera', $data);
 });

Route::resource('agenda','AgendaController');

Route::get('autori','AutoriController@autori');

Route::get('listaLibri','AutoriController@listaLibri');

Route::get('qualeautore','AutoriController@qualeAutore');

Route::get('bigList','AutoriController@bigList');

Route::get('libriinprestito','LibriController@inPrestito');

Route::get('utenticheleggono','LibriController@quantiMiLeggono');

Route::get('LibriPoly',function(){
   $libri=App\Models\Libri::with('autore')->get();

    foreach($libri->generi as $gen){
        echo $libri->nome .'['.$gen->nome_genere.']';
    }
});

Route::get('AutoriPoly',function(){
    $autori=App\Models\Autori::find(2);

    foreach($autori->generi as $gen){
        echo $autori->nome .'['.$gen->nome_genere.']';
    }
});

Route::get('/metodospedizione',['
    middleware'=>'carrellopieno',function(){
    return'Pagina Metodo spedizione';
}]);

Route::get('/listalibri','LibriController@index');

Route::get('listaeloquent','LibriController@eloquentLibri');

Route::get('/salva_dati_in_cache',function (){
   $scadenza=\Carbon\carbon::now()->addMinute(10);
    \Cache::put('nome','Lucio',$scadenza);
    return 'dati salvati';
});

Route::get('/recupera_dati_in_cache',function(){
   if(\Cache::has('nome'))
   {

   }return Cache::get('nome');
});

Route::get('/se_non_ci_sono_recupera',function(){

});
