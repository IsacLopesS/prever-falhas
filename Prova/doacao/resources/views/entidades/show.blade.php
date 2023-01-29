@extends('principal')
@section('corpo')
    <h3>dados da entidade:</h3>
    <p>id: {{$entidade->id}}</p>
    <p>nome: {{$entidade->nome}}</p>
    <p>bairro: {{$entidade->bairro}}</p>
    <p>cidade: {{$entidade->cidade}}</p>
    <p>estado: {{$entidade->estado}}</p>
    <a href="{{route('entidades.edit',[$entidade->id])}}">editar</a>
    <a href="{{route('entidades.index')}}">voltar</a>

    <form action="{{route('entidades.destroy',[$entidade->id])}}" 
    method="post" name="frmDelete" onsubmit="return confirm('Tem certeza?')">
        @csrf 
        @method('DELETE')

        <input type="submit" value="excluir">
    </form>
@endsection
