<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes | Lista</title>
</head>
<body>
    <center><div>
        <H2>Listando clientes:</H2>
            @foreach($clientes as $cliente)
                <p><a href="{{$cliente->ID}}">{{$cliente->NOME}}</a></p>
            @endforeach
            
        <H2>Cadastrar clientes:</H2>
        
        <form method="post">
            {{csrf_field()}}
            <p><input name="NOME" type="text" placeholder="Nome..."></p>
            <p><input name="EMAIL" type="text" placeholder="Email..."></p>
            <p><button type="submit">Salvar</button></p>
        </form>
    </div></center>
</body>
</html>