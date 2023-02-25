<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="css/fale.css">
</head>
<body>
    <header>
        <ol>
            <li><img src="image/casa.png" id="icon_casa"></li>
            <li><a href="<?php echo URL;?>home">Página inicial</a></li>
        </ol>
    </header>
    <h1>Fale conosco</h1>
    <form action="" method="post">
        <ol>
            <li><input type="text" placeholder="Nome" require></li>
            <br>
            <li><input type="email" name="" id="" placeholder="E-mail" require></li>
            <br>
            <li><textarea name="message" rows="10" cols="30" placeholder="Digite aqui sua mensagem" require></textarea></li>
            <br>
        </ol>
        <button type="submit">Enviar</button>
    </form>

    
</body>
</html>