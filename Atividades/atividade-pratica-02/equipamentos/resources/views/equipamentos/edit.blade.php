@extends('principal')
@section('corpo')
    <form action="{{route('equipamentos.update',[$equipamento->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{$equipamento->nome}}" >
        </div>
        <div class="text-right">
            <input type="submit" value="atualizar" class="btn-btn-primary">
            <input type="button" value="limpar" class="btn btn-danger">
        </div>
    </form>
@endsection