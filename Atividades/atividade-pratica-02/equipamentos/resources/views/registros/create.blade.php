@extends('principal')
@section('corpo')
    <form action="{{route('registros.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="equipamento">Equipamento: </label>
            <select name="equipamento_id" id="equipamento_id">
                <option value="">escolha</option>
                @foreach($equipamentos as $e)
                    <option value="{{$e->id}}">{{$e->nome}}</option>
                @endforeach
            </select>

            <label for="user">User: </label>
            <select name="user_id" id="user_id">
                <option value="">escolha</option>
                @foreach($users as $u)
                    <option value="{{$u->id}}">{{$u->name}}</option>
                @endforeach
            </select>      
        </div>
        <div class="form-group">
            <label for="descricao">descricao: </label>
            <input type="text" name="descricao" id="descricao" class="form-control" >
        </div>
        <div class="form-group">
            <label for="datalimite">datalimite: </label>
            <input type="text" name="datalimite" id="datalimite" class="form-control" >
        </div>
        <div class="form-group">
            <label for="tipo">tipo: </label>
            <input type="text" name="tipo" id="tipo" class="form-control" placeholder="int">
        </div>
        <div class="text-right">
            <input type="submit" value="criar" class="btn-btn-primary">
            <input type="button" value="limpar" class="btn btn-danger">
        </div>
    </form>
@endsection