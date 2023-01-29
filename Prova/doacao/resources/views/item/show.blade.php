@extends('principal')
@section('corpo')
    <h3>dados do item:</h3>
    <p>id: {{$item->id}}</p>
    <p>descrição: {{$item->descricao}}</p>
    <a href="{{route('items.edit',[$item->id])}}">editar</a>
    <a href="{{route('items.index')}}">voltar</a>

    <form action="{{route('items.destroy',[$item->id])}}" 
    method="post" name="frmDelete" onsubmit="return confirm('Tem certeza?')">
        @csrf 
        @method('DELETE')

        <input type="submit" value="excluir">
    </form>
@endsection
