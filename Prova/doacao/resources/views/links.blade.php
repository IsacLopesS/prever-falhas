 @extends('princiapl')
    @section('areaAdm')       
        <span><a href="{{route('items.index')}}"> listar items</a> |</span>
        <span><a href="{{route('items.create')}}"> criar item</a> |</span>
        <span><a href="{{route('entidades.create')}}"> criar entidades</a> |</span>
        <span><a href="{{route('coletas.index')}}"> listar coletas</a> |</span>
        <span><a href="{{route('coletas.create')}}"> criar coletas</a> |</span>
    @endsection