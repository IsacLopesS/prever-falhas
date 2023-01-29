@extends('buscarPassagem')
@section('informacao')

    <div class="corpo">
            <div class="titulo-corpo">encontre sua passagem de ônibus</div>
            <div class="caixa-de-dados" name="buscar-passagem" id="buscar-passagem"
            >
    
            <table class="table table-borderd table-hover table-scripted">
        <thead class="thead-dark">
            <tr>
                <th>Origem</th>
                <th>Destino</th>
                <th>Data e Hora</th>
                <th>Preço</th>
                <th>Escolher</th>
            </tr>
        </thead>
        @foreach ($viagem as $v)
            <tr>
                <td>{{$v->origem}}</td>
                <td>{{$v->destino}}</td>
                <td>{{$v->data_hora}}</td>
                <td>{{$v->preco}}</td>
                <td><a href="{{route('viagem.show',[$v->id])}}">escolher</a></td>
            </tr>
        @endforeach
    </table>   
            </div>
            <div class="img-onibus">
                <img  src="/imagens/onibus.png">
            </div>
    </div>
@endsection