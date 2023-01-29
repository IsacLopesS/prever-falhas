@extends('principal')

@section('corpo')
   
    <table class="table table-borderd table-hover table-scripted">
        <thead class="thead-dark">
            <tr>
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>exibir</th>
            </tr>
        </thead>
        @foreach ($users as $u)
            <tr>
                <td>{{$u->name}}</td>
                <td>{{$u->email}}</td>
                <td>{{$u->password}}</td>
                <td><a href="{{route('users.show',[$u->id])}}">exibir</a></td>
            </tr>
        @endforeach
    </table>
@endsection