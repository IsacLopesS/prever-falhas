@extends('principal')
@section('corpo')
    <form action="{{route('items.update', [$item->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">descrição: </label>
            <input type="text" name="descricao" id="descricao" class="form-control" value="{{$item->descricao}}">
        </div>
        <div class="text-right">
            <input type="submit" value="atualizar" class="btn-btn-primary">
            <input type="button" value="limpar" class="btn btn-danger">
        </div>
    </form>
@endsection