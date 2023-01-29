@extends('principal')

@section('corpo')
   
    <table class="table table-borderd table-hover table-scripted">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>item_id</th>
                <th>entidade_id</th>
                <th>quantidade</th>
                <th>data</th>
                <th>exibir</th>
            </tr>
        </thead>
        @foreach ($coletas as $c)
            <tr>
                <td>{{$c->id}}</td>
                <td>{{$c->item_id}}</td>
                <td>{{$c->entidade_id}}</td>
                <td>{{$c->quantidade}}</td>
                <td>{{$c->data}}</td>
                <td><a href="{{route('coletas.show',[$c->id])}}">exibir</a></td>
            </tr>
        @endforeach
    </table>
@endsection