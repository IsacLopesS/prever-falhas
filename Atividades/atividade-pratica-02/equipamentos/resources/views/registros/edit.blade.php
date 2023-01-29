@extends('principal')
@section('corpo')
    <form action="{{route('registros.update',[$registro->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="equipamento">Equipamento: </label>
            <select name="equipamento_id" id="equipamento_id">
                <option value="{{$registro->equipamento->id}}">{{$registro->equipamento->nome}}</option>
                @foreach($equipamentos as $e)
                    <option value="{{$e->id}}">{{$e->nome}}</option>
                @endforeach
            </select>

            <label for="user">User: </label>
            <select name="user_id" id="user_id">
                <option value="{{$registro->user->id}}">{{$registro->user->name}}</option>
                @foreach($users as $u)
                    <option value="{{$u->id}}">{{$u->name}}</option>
                @endforeach
            </select>      
        </div>
        <div class="form-group">
            <label for="descricao">descricao: </label>
            <input type="text" name="descricao" id="descricao" class="form-control" value="{{$registro->descricao}}" >
        </div>
        <div class="form-group">
            <label for="datalimite">datalimite: </label>
            <input type="text" name="datalimite" id="datalimite" class="form-control" value="{{$registro->datalimite}}">
        </div>
        <div class="form-group">
            <label for="tipo">tipo: </label>
            <input type="text" name="tipo" id="tipo" class="form-control" placeholder="int" value="{{$registro->tipo}}">
        </div>
        <div class="text-right">
            <input type="submit" value="atualizar" class="btn-btn-primary">
            <input type="button" value="limpar" class="btn btn-danger">
        </div>
    </form>
@endsection