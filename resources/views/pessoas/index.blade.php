<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pessoas</title>
</head>
<body>
    @foreach($pessoas as $pessoa)
        <p>Nome: {{$pessoa->nome}}</p>
        @foreach($pessoa->telefone as $telefone)
            <p>Telefone: {{$telefone->telefone}}</p>
        @endforeach
        @endforeach
</body>
</html>