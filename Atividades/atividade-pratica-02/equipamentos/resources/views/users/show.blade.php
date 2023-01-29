@extends('principal')
@section('corpo')
    <h3>dados do User:</h3>
    <p>Nome: {{$user->name}}</p>
    <p>rg: {{$user->email}}</p>
    <p>id: {{$user->password}}</p>
    <a href="{{route('users.edit',[$user->id])}}">editar</a>
    <a href="{{route('users.index')}}">voltar</a>

    <form action="{{route('users.destroy',[$user->id])}}" 
    method="post" name="frmDelete" onsubmit="return confirm('Tem certeza?')">
        @csrf 
        @method('DELETE')

        <input type="submit" value="excluir">
    </form>
@endsection
