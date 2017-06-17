<table>
    <thead>
    <tr>
        <th>Libro</th>
        <th>Chi lo ha preso in prestito</th>
    </tr>
    </thead>
    <tbody>
    @foreach($libro->miLeggono as $ut)
            <td>{{$libro['nome']}}</td>
            <td>{{$ut['nome'].' '.$ut['cognome']}}</td>
        </tr>
    @endforeach
    </tbody>
</table>