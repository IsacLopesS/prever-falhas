<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="/css/estilo.css">
    <script type="text/javascript" src="/js/index.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>principal</title>
</head>
<body>
    <div>
        <h1>doações</h1>
        <span><a href="{{route('entidades.index')}}"> Area geral</a> |</span>
        <div>Area administrativa:</div>
        <span><a href="{{route('items.index')}}"> listar items</a> |</span>
        <span><a href="{{route('items.create')}}"> criar item</a> |</span>
        <span><a href="{{route('entidades.create')}}"> criar entidades</a> |</span>
        <span><a href="{{route('coletas.index')}}"> listar coletas</a> |</span>
        <span><a href="{{route('coletas.create')}}"> criar coletas</a> |</span>

    </div>
    @if(session('alguma_mensagem'))
        <div class="alert alert-success">
            {{session('alguma_mensagem')}} 
        </div>
    @endif
    
    @yield('corpo')
    
</body>
</html>