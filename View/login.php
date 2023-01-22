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
    <form action="<?php echo URL;?>logar" method="post">
        <div class="form-group">
            <input type="email" placeholder="E-mail" name="email">
        </div>
        <div class="form-group">
            <input type="password" name="Senha" id="input_pass" placeholder="Senha" name="senha">
        </div>
        <div class="form-group">
            <button type="submit">Entrar</button>
        </div>
    </form>

    <a href="<?php echo URL;?>cadastro" id="btn_cadastro"><button type="submit">Cadastre - se</button></a>

</body>
</html>