@extends('principal')
@section('corpo')
    <form action="{{route('users.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" class="form-control" >
        </div>
        <div class="form-group">
            <label for="email">email: </label>
            <input type="text" name="email" id="email" class="form-control" >
        </div>
        <div class="form-group">
            <label for="password">password: </label>
            <input type="text" name="password" id="password" class="form-control" >
        </div>
        <div class="text-right">
            <input type="submit" value="criar" class="btn-btn-primary">
            <input type="button" value="limpar" class="btn btn-danger">
        </div>
    </form>
@endsection