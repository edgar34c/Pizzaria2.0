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
    <h1>Cadastro</h1>

    <form action="<?php echo URL;?>enviar" method="post">
        <div class="center">
            <input type="text" placeholder="Nome" id="nome" name="nome" required>
        </div>
        <div class="center">
            <input type="text" placeholder="Sobrenome" id="sobrenome" name="sobrenome" required>
        </div>
        <div class="center">
            <input type="email" placeholder="E-mail" name="email" required>
        </div>
        <div class="center">
            <input type="tel" placeholder="Telefone" id="telefone" name="telefone" required>
        </div>
        <div class="center">
            <input type="text" placeholder="Enredeço" id="endere" name="endere" required>
        </div>
        <div class="center">
            <input type="password" placeholder="Senha" id="senha" name="senha" required>
        </div>
        
        <div class="btn_center">
            <button>Enviar</button>
        </div>
    </form>
</body>
</html>