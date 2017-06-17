@extends('template.main')
@section('content')
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
           @if(count($errors->all()) > 0)
                    <div class="alert alert-danger" role="alert">
                             <p><b>OOOPS!</b></p>
                             <ul>
                                     @foreach($errors->all()  as $e)
                                             <li>{{$e}}</li>
                                         @endforeach
                                 </ul>
                        </div>
                @endif
        {{Form::open(['url'=>'agenda'])}}
        <div class="form-group">
            {!! Form::label('nome', 'Il tuo nome:') !!}
                       {!! Form::text('nome', null, ['class' => 'form-control']) !!}
                    </div>

              <div class="form-group">
                       {!! Form::label('cognome', 'Il tuo cognome:') !!}
                        {!! Form::text('cognome', null, ['class' => 'form-control']) !!}
                   </div>

                <div class="form-group">
                        {!! Form::label('email', 'La tua email:') !!}
                         {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    </div>
        <div class="form-group">
                         {!! Form::label('telefono', 'Il tuo telefono:') !!}
                         {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
                     </div>

                {!! Form::submit('invia', ['class' => 'btn btn-success']) !!}

                 {!! Form::close() !!}
             </div>
    @endsection