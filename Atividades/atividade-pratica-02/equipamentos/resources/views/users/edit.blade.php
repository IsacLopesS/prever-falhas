@extends('principal')
@section('corpo')
    <form action="{{route('users.update', [$user->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="email">email: </label>
            <input type="text" name="email" id="email" class="form-control" value="{{$user->email}}">
        </div>
        <div class="form-group">
            <label for="password">password: </label>
            <input type="text" name="password" id="password" class="form-control" value="{{$user->password}}">
        </div>
        <div class="text-right">
            <input type="submit" value="atualizar" class="btn-btn-primary">
            <input type="button" value="limpar" class="btn btn-danger">
        </div>
    </form>
@endsection