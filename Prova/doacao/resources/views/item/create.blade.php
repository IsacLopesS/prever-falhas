@extends('principal')
@section('corpo')
    <form action="{{route('items.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">descrição </label>
            <input type="text" name="descricao" id="descricao" class="form-control">
        </div>
        <div class="text-right">
            <input type="submit" value="cadastrar" class="btn-btn-primary">
            <input type="button" value="limpar" class="btn btn-danger">
        </div>
    </form>
@endsection