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