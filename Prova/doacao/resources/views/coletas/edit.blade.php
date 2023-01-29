@extends('principal')
@section('corpo')
    <form action="{{route('coletas.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">id: </label>
            <input type="text" name="id" id="id" class="form-control" value="{{$coleta->id}}">
            <label for="nome">item_id: </label>
            <input type="text" name="item_id" id="item_id" class="form-control" value="{{$coleta->item_id}}">
            <label for="nome">entidade_id: </label>
            <input type="text" name="entidade_id" id="entidade_id" class="form-control" value="{{$coleta->entidade_id}}">
            <label for="nome">quantidade: </label>
            <input type="text" name="quantidade" id="quantidade" class="form-control" value="{{$coleta->quantidade}}">
            
            <label for="nome">data: </label>
            <input type="text" name="data" id="data" class="form-control" value="{{$coleta->data}}">

        </div>
        <div class="text-right">
            <input type="submit" value="atualizar" class="btn-btn-primary">
            <input type="button" value="limpar" class="btn btn-danger">
        </div>
    </form>
@endsection