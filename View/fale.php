<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale conosco</title>
    <link rel="stylesheet" href="css/fale.css">
</head>
<body>
    <h1>Fale conosco</h1>
    <form action="fales" method="post">
        <div class="center">
            <ol>
                <li><input type="text" placeholder="Nome" name="nome" required></li>
                <br>
                <li><input type="email" name="email" id="email" placeholder="E-mail"  required></li>
                <br>
                <li><textarea name="assunto" rows="10" cols="30" placeholder="Digite aqui sua mensagem" required></textarea></li>
                <br>
            </ol>
        </div>
        <div class="btn_center">
            <button type="submit">Enviar</button>
        </div>
    </form>

</body>
</html>