@extends('template/main')
 @section('content')
     <div>Caro {{$nome or 'Porcell'}}<br/>
         Questo è il contenuto della view homepage/index.blade.php
     </div>
     {{$variabile =2}}
     @if($variabile ==1)
     <p>Lavariabile è uguale a 1</p>
     @elseif($variabile ==2)
     <p>La variabile è uguale a 2</p>
     @endif


     @endsection