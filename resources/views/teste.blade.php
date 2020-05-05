<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/clube/2" method="DELETE">
        @csrf
        Nome<input type="text" name="nome" id="">
        Nome Reduzido<input type="text" name="nomeReduzido" id="">
        Sigla<input type="text" name="sigla" id="">
        Ano Fundacao<input type="text" name="anoFundacao" id="">
        <button type="submit">Cadastrar</button>
    </form>
    <form action="/api/actor/delete" method="POST">
        @csrf
        <input type="text" name="id" id="">
        <button type="submit">Exluir</button>
    </form>
</body>
</html>
