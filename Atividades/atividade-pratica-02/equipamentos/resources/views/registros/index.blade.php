@extends('principal')

@section('corpo')
   
    <table class="table table-borderd table-hover table-scripted">
        <thead class="thead-dark">
            <tr>
                <th>equipamento</th>
                <th>user</th>
                <th>descrição</th>
                <th>data limite</th>
                <th>tipo</th>
                <th>exibir</th>
            </tr>
        </thead>
        @foreach ($registros as $r)
            <tr>
                <td>{{$r->equipamento->nome}}</td>
                <td>{{$r->user->name}}</td>
                <td>{{$r->descricao}}</td>
                <td>{{$r->datalimite}}</td>
                <td>{{$r->tipo}}</td>
                <td><a href="{{route('registros.show',[$r->id])}}">exibir</a></td>
            </tr>
        @endforeach
    </table>
@endsection