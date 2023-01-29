@extends('principal')
@section('corpo')
    <form action="{{route('equipamentos.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" class="form-control" >
        </div>
        <div class="text-right">
            <input type="submit" value="criar" class="btn-btn-primary">
            <input type="button" value="limpar" class="btn btn-danger">
        </div>
    </form>
@endsection