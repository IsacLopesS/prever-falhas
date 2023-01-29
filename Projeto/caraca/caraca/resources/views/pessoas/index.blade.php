@extends('principal')

@section('corpo')
   
    <table class="table table-borderd table-hover table-scripted">
        <thead class="thead-dark">
            <tr>
                <th>nome</th>
                <th>rg</th>
                <th>id</th>
                <th>exibir</th>
            </tr>
        </thead>
        @foreach ($pessoas as $p)
            <tr>
                <td>{{$p->nome}}</td>
                <td>{{$p->rg}}</td>
                <td>{{$p->id}}</td>
                <td><a href="{{route('pessoas.show',[$p->id])}}">exibir</a></td>
            </tr>
        @endforeach
    </table>
@endsection