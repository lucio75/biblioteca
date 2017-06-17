<!doctype html>
<html lang="en">
 <head>
        <meta charset="UTF-8">
       <title>Iscrizione</title>
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    </head>
 <body>

 <div class="container">
       <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      {!! Form::open(['url' => 'iscriviti/dati']) !!}

                          <div class="form-group">
                                   {!! Form::label('nome', 'Il tuo nome') !!}
                                  {!! Form::text('nome', null, ['class' => 'form-control']) !!}
                                </div>

                           <div class="form-group">
                                    {!! Form::label('cognome', 'Il tuo cognome') !!}
                                  {!! Form::text('cognome', null, ['class' => 'form-control'])
 !!}
                              </div>
            {!! Form::submit('salva', ['class' => 'btn btn-success']) !!}

                         {!! Form::close() !!}
                     </div>
            </div>
    </div>

 </body>
 </html>