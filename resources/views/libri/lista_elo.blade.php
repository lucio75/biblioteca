@extends('template.main')
@section('biglist')
    <ul>
        @foreach($lista as $lib)
            <li>
                {{$lib->nome}}
            </li>
        @endforeach
    </ul>

    {{$lista->render()}}
@endsection