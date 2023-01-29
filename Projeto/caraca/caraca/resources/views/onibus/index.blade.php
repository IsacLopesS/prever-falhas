<table class="table table-borderd table-hover table-scripted">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>assentos livres</th>
                <th>total de assentos</th>
                <th>placa</th>
                <th>viagens</th>
                <th>exibir</th>
            </tr>
        </thead>
        @foreach ($onibus as $o)
            <tr>
                <td>{{$o->id}}</td>
                <td>{{$o->num_assentos_disp}}</td>
                <td>{{$o->num_T_assentos}}</td>
                <td>{{$o->placa}}</td>
                @if($o->viagens->count() > 0)
                    <td>{{$o->viagens[0]->destino}}</td>
                @else
                    <td>sem viagem</td>
                @endif
                <td><a href="{{route('onibus.show',[$o->id])}}">exibir</a></td>
            </tr>
        @endforeach
    </table>

