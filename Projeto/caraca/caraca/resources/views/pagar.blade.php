
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caraça Transportes</title>
    <link rel="stylesheet"  href="/css/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <header class="header">
        <div class="imgheader">
            <img  src="/imagens/logocaraca.png">
        </div>
        <span class="titulo">Caraça transportes e Turismo</span> 
    </header>
    <!--------------------------------------- CONTEÚDO DA PAGINA ---------------------------------------->
    <div class="menu">
        <img  src="/imagens/menu3.png">
        <span class="pague" >pague</span>
    </div>
    @if(session('alguma_mensagem'))
        <div class="alert alert-success">
            {{session('alguma_mensagem')}} 
        </div>
    @endif
    <div class="corpo">

        
        <div class="titulo-corpo">Dados da sua viagem:</div>
        <div class="caixa-de-dados">
           <h5>
               dados do passageiro: {{$viajar->pessoa->id}}
           </h5>
           nome: {{$viajar->pessoa->nome}}<br>
           rg: {{$viajar->pessoa->rg}} <br>
           poltrona escolhida: {{$viajar->num_assento}} <br>
           <h5>Dados da viagem</h5>
           origem: {{$viajar->viagem->origem}} <br>
           destino: {{$viajar->viagem->destino}} <br>
           dia / hora da viagem: {{$viajar->viagem->data_hora}} <br>
           valor: {{$viajar->viagem->preco}} <br>


              
            
              
        </div>
        <div class="img-onibus">
            <img  src="/imagens/onibus.png">
        </div>
    </div>
    <!-- ------------------------------------------------------------------------------------ -->
    <footer class="rodape">
        <h3 class = "texto-rodape" >todos os direitos reservados</h3>
    </footer>
    
</body>
</html>