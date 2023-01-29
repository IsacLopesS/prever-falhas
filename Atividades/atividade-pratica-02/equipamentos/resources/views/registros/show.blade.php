@extends('principal')
@section('corpo')
    <h3>dados do registro:</h3>
    <p>User: {{$registro->user->name}}</p>
    <p>equipamento: {{$registro->equipamento->nome}}</p>
    <p>descricao: {{$registro->descricao}}</p>
    <p>datalimite: {{$registro->datalimite}}</p>
    <p>tipo: {{$registro->tipo}}</p>
    <a href="{{route('registros.edit',[$registro->id])}}">editar</a>
    <a href="{{route('registros.index')}}">voltar</a>

    <form action="{{route('registros.destroy',[$registro->id])}}" 
    method="post" name="frmDelete" onsubmit="return confirm('Tem certeza?')">
        @csrf 
        @method('DELETE')

        <input type="submit" value="excluir">
    </form>
@endsection
