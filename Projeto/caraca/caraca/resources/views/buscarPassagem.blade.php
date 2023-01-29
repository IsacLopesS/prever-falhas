
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caraça Transportes</title>
    <link rel="stylesheet"  href="/css/estilo.css">
    <script type="text/javascript" src="/js/index.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
    <header class="header">
        <div class="imgheader">
            <img  src="/imagens/logocaraca.png">
        </div>
        <span class="titulo">Caraça transportes e Turismo</span> 

        <a href="{{route('viagem.index')}}">aqui</a>
    </header>
    <!--------------------------------------- CONTEÚDO DA PAGINA ---------------------------------------->
    <div class="menu">
        <img  src="/imagens/menu1.png">
        <span class="pague" >pague</span>
    </div>
    <!-- --------------------------- INFORMAÇÃO-------------------------- -->
    @yield('informacao') <!--viagem/index -->

        
    <!-- ------------------------------------------------------------------------------------ -->
    <footer class="rodape">
        <h3 class = "texto-rodape" >todos os direitos reservados</h3>
    </footer>
    
</body>
</html>