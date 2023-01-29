@extends('principal')

@section('corpo')

    <table class="table table-borderd table-hover table-scripted">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>bairro</th>
                <th>cidade</th>
                <th>estado</th>
                <th>exibir</th>
            </tr>
        </thead>
        @foreach ($entidades as $e)
            <tr>
                <td>{{$e->id}}</td>
                <td>{{$e->nome}}</td>
                <td>{{$e->bairro}}</td>
                <td>{{$e->cidade}}</td>
                <td>{{$e->estado}}</td>
                <td><a href="{{route('entidades.show',[$e->id])}}">exibir</a></td>
            </tr>
        @endforeach
    </table>

    <h3>Área Geral</h3>
    <table class="table table-borderd table-hover table-scripted">
            <thead class="thead-dark">
                <th>Entidade</th>
                <th>itens</th>

            </thead>
            <tbody>
            @foreach ($entidades as $e)
                <tr>
                    <td>{{$e->nome}}</td>
                    <td>{{$e->qtd($e)}}</td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
                <th>total geral</th>
                <th>{{$entidades[0]->totalGeral($entidades)}}</th>
            </tfoot>
    </table>

    <table class="table table-borderd table-hover table-scripted">
            <thead class="thead-dark">
                <th>item</th>
                <th>quantidade</th>
                <th>porcentagem</th>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <td>{{$item->descricao}}</td>
                    <td>{{$item->qtd($item)}}</td>
                    <td>{{$item->porcentagem($item, $items)}}%</td>
                </tr>
                    
                @endforeach
            </tbody>

            <tfoot>
                <th>Total Geral</th>
                <th>{{$items[0]->totalqtd($items)}}</th>
                <th> 100%</th>
            </tfoot>
    </table>
@endsection