@extends('principal')

@section('corpo')
   
    <table class="table table-borderd table-hover table-scripted">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>descrição</th>
                <th>exibir</th>
            </tr>
        </thead>
        @foreach ($items as $i)
            <tr>
                <td>{{$i->id}}</td>
                <td>{{$i->descricao}}</td>
                <td><a href="{{route('items.show',[$i->id])}}">exibir</a></td>
            </tr>
        @endforeach
    </table>
@endsection