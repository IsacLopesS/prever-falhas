<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>principal</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</head>
<body >
    <h1>alo mundo</h1>
    <table>
        <tr>
            <th>
                links
            </th>
        </tr>
        <tr>
            <td>
                <li> <a href="{{route('principal')}}">home</a></li>
                <li> <a href="{{route('pessoas.index')}}">index</a></li>
                <li> <a href="{{route('pessoas.create')}}">cadastrar Pessoa</a></li>
                <li><a href="{{route('assento.index')}}">ver assentos</a></li>
                <li><a href="{{route('onibus.index')}}">lista de onibus</a></li>

            </td>
        </tr>
    </table>
<!-- ------------<MENSAGEM TIPO FLASH> ------------------------------------>
    <!-- caso exista 'alguma mensagem' em 'session', ela será exibida! -->
    @if(session('alguma_mensagem'))
        <div class="alert alert-success">
            {{session('alguma_mensagem')}} 
        </div>
    @endif
<!-- ------------</MENSAGEM TIPO FLASH> ------------------------------------>

    @yield('corpo')
</body>
</html>