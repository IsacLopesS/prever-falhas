@extends('principal')
@section('corpo')
<table class="table table-borderd table-hover table-scripted">
        <thead class="thead-dark">
            <tr>
                <th>onibus</th>
                <th>viagem</th>
                <th>ocupado</th>
                <th>numero do assento</th>
            </tr>
        </thead>
        @foreach ($assentos as $a)
            <tr>
                <td>{{$a->id_onibus}}</td>
                <td>{{$a->id_viagem}}</td>
                <td>{{$a->ocupado}}</td>
                <td>{{$a->num_assento }}</td>
            </tr>
        @endforeach
    </table>
@endsection