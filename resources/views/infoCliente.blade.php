<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Informações Cliente</title>

</head>
    <body>
        <center><div>
            <H2>Informações do Cliente:</H2>
            <p><label>Nome: {{$infosCliente->NOME}}</label></p>
            <p><label>Email: {{$infosCliente->EMAIL}}</label></p>
            <a href="AtualizarCadastro/{{$infosCliente->ID}}"><button type="button" class="btn btn-secondary">Alterar Informações</button></a>
            <a href="{{$infosCliente->ID}}/Excluir"><button type="button" class="btn btn-danger">Alterar Informações</button></a>
        </center></div>
    </body>
</html>