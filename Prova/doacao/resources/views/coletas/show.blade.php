@extends('principal')
@section('corpo')
    <h3>dados da coleta:</h3>
    <p>id: {{$coleta->id}}</p>
    <p>item_id: {{$coleta->item_id}}</p>
    <p>entidade_id: {{$coleta->entidade_id}}</p>
    <p>quantidade: {{$coleta->quantidade}}</p>
    <p>data: {{$coleta->data}}</p>
    <a href="{{route('coletas.edit',[$coleta->id])}}">editar</a>
    <a href="{{route('coletas.index')}}">voltar</a>

    <form action="{{route('coletas.destroy',[$coleta->id])}}" 
    method="post" name="frmDelete" onsubmit="return confirm('Tem certeza?')">
        @csrf 
        @method('DELETE')

        <input type="submit" value="excluir">
    </form>
@endsection
