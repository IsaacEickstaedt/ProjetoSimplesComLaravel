<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações Clientes</title>
</head>
<body>
    <center><div>
        <H2>Alterar Informações cliente:</H2> 
        <form method="post" action="{{$infoCliente->ID}}/Carregando">
            {{csrf_field()}}
            <p><input name="NOME" type="text" placeholder="Nome..." value="{{$infoCliente->NOME}}"></p>
            <p><input name="EMAIL" type="text" placeholder="Email..." value="{{$infoCliente->EMAIL}}"></p>
            <p><button type="submit">Salvar</button></p>
        </form>
    </div></center>
</body>
</html>