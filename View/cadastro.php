<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>
    <form action="<?php echo URL;?>enviar" method="post">
        <input type="text" placeholder="Nome" id="nome" name="nome">
        <br>
        <input type="text" placeholder="Sobrenome" id="sobrenome" name="sobrenome">
        <br>
        <input type="email" placeholder="E-mail" id="email" name="email">
        <br>
        <input type="number" placeholder="Telefone" id="telefone" name="telefone">
        <br>
        <input type="text" placeholder="Enredeço" id="endere" name="endere">
        <br>
        <input type="password" placeholder="Senha" id="senha" name="senha">
        <br>
        <button>Enviar</button>
    </form>
</body>
</html>