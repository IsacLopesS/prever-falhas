@extends('principal')

@section('corpo')
   
    <table class="table table-borderd table-hover table-scripted">
        <thead class="thead-dark">
            <tr>
                <th>nome</th>
                <th>exibir</th>
            </tr>
        </thead>
        @foreach ($equipamentos as $e)
            <tr>
                <td>{{$e->nome}}</td>
                <td><a href="{{route('equipamentos.show',[$e->id])}}">exibir</a></td>
            </tr>
        @endforeach
    </table>
@endsection