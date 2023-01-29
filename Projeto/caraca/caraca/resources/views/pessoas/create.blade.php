@extends('principal')
@section('corpo')
    <form action="{{route('pessoas.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>
        <div class="form-group">
            <label for="rg">RG: </label>
            <input type="text" name="rg" id="rg" class="form-control">
        </div>
        <div class="text-right">
            <input type="submit" value="cadastrar" class="btn-btn-primary">
            <input type="button" value="limpar" class="btn btn-danger">
        </div>
    </form>
@endsection