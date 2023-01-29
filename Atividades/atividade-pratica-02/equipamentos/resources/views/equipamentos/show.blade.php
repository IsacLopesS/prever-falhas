@extends('principal')
@section('corpo')
    <h3>dados do Equipamento:</h3>
    <p>Nome: {{$equipamento->nome}}</p>
    <a href="{{route('equipamentos.edit',[$equipamento->id])}}">editar</a>
    <a href="{{route('equipamentos.index')}}">voltar</a>

    <form action="{{route('equipamentos.destroy',[$equipamento->id])}}" 
    method="post" name="frmDelete" onsubmit="return confirm('Tem certeza?')">
        @csrf 
        @method('DELETE')

        <input type="submit" value="excluir">
    </form>
@endsection
