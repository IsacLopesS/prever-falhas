@extends('principal')
@section('corpo')
    <form action="{{route('entidades.update', [$entidade->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">nome: </label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{$entidade->nome}}">
            <label for="nome">bairro: </label>
            <input type="text" name="bairro" id="bairro" class="form-control" value="{{$entidade->bairro}}">
            <label for="nome">cidade: </label>
            <input type="text" name="cidade" id="cidade" class="form-control" value="{{$entidade->cidade}}">
            <label for="nome">estado: </label>
            <input type="text" name="estado" id="estado" class="form-control" value="{{$entidade->estado}}">

        </div>
        <div class="text-right">
            <input type="submit" value="atualizar" class="btn-btn-primary">
            <input type="button" value="limpar" class="btn btn-danger">
        </div>
    </form>
@endsection