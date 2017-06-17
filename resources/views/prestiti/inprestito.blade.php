<table>
    <thead>
    <tr>
        <th>Utente</th>
        <th>Libro in prestito</th>
    </tr>
    </thead>
    <tbody>
    @foreach($utente->LibriInPrestito as $libro)
        <tr>
           <td>{{$utente['nome']}}</td>
            <td>{{$libro['nome']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>