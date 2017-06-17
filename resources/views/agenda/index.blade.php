@extends('template.main')
 @section('content')

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                @if(Session::has('ok_message'))
                         <div class="alert alert-success">{{Session::get('ok_message')}}</div>
                         @endif
                <table class="table table-bordered">
                         <thead>
                        <tr>
                                 <th>Nome</th>
                                 <th>Cognome</th>
                                 <th>Email</th>
                                <th>Telefono</th>
                                <th>Azioni</th>
                             </tr>
                         </thead>

                        <tbody>
                        @foreach($listaNominativi as $ln)
                                        <tr>
                                                 <td>{{$ln['nome']}}</td>
                                                <td>{{$ln['cognome']}}</td>
                                                 <td>{{$ln['email']}}</td>
                                                <td>{{$ln['telefono']}}</td>
                                                 <td><a class="btn btn-primary" href="/agenda/{{$ln['id']}}/edit">modifica</a></td>
                                            </tr>
                                             @endforeach
                                   </tbody>
                            </table>
                       </div>
       @endsection