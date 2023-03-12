<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <h1>Login</h1>
    <form action="<?php echo URL;?>logar" method="post">
        <div class="center">
            <input type="email" placeholder="E-mail" name="email" required>
        </div>
        <div class="center">
            <input type="password" name="Senha" id="input_pass" placeholder="Senha" name="senha" required>
        </div>
        <div class="btn_center">
            <button type="submit">Entrar</button>
        </div>
    </form>
    <div class="btn_center">
        <a href="<?php echo URL;?>cadastro" id="btn_cadastro"><button type="submit">Cadastre - se</button></a>
    </div>
</body>
</html>