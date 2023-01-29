@extends('principal')
@section('corpo')
    <h3>dados da Pessoa:</h3>
    <p>Nome: {{$pessoa->nome}}</p>
    <p>rg: {{$pessoa->rg}}</p>
    <p>id: {{$pessoa->id}}</p>
    <a href="{{route('pessoas.edit',[$pessoa->id])}}">editar</a>
    <a href="{{route('pessoas.index')}}">voltar</a>

    <form action="{{route('pessoas.destroy',[$pessoa->id])}}" 
    method="post" name="frmDelete" onsubmit="return confirm('Tem certeza?')">
        @csrf 
        @method('DELETE')

        <input type="submit" value="excluir">
    </form>
@endsection
