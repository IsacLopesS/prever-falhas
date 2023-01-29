@extends('principal')
@section('corpo')
    <form action="{{route('coletas.store')}}" method="post">
        @csrf
        <div class="form-group">
        <label for="nome">item_id: </label>
            <select name="item_id" id="item_id">
            <option value="">escolha</option>
                @foreach ($items as $i)
                    <option value="{{$i->id}}">{{$i->descricao}}</option>
                @endforeach
            </select>
            <label for="nome">entidade_id: </label>
            <select name="entidade_id" id="entidade_id">
            <option value="">escolha</option>
                @foreach ($entidades as $e)
                    <option value="{{$e->id}}">{{$e->nome}}</option>
                @endforeach
            </select><br>
            <label for="nome">quantidade: </label>
            <input type="text" name="quantidade" id="quantidade" class="form-control">
            <label for="nome">data: </label>
            <input type="text" name="data" id="data" class="form-control" placeholder="YYY-MM-DD">

        </div>
        <div class="text-right">
            <input type="submit" value="criar" class="btn-btn-primary">
            <input type="button" value="limpar" class="btn btn-danger">
        </div>
    </form>
@endsection