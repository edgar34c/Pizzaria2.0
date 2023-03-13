<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
   
    <header>
        <!--Menu superior!-->
        <ol>
            <div class="center">
                <li><img src="image/casa.png" id="icon_casa"></li>
                <li><a href="<?php echo URL;?>home">Página inicial</a></li>
                <li><img src="image/telefone.png" id="icon_tel"></li>
                <li><a href="<?php echo URL;?>fale">Fale Conosco</a></li>
                <li><img src="image/login.png" id="icon_login"></li>
                <li><a href="<?php echo URL;?>abrirlogar">Entrar</a></li>
            </div>
        </ol>
    </header>

    <div class="slider">

        <div class="slides">
                <!--Radio Buttons-->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
    
                <!--Slide images-->
                <div class="slide first">
                    <img src="image/pizza3.jpg" alt="imagem 1">
                </div>
                <div class="slide">
                    <img src="image/pizza2.png" alt="imagem 2">
                </div>
                <div class="slide">
                    <img src="image/pizza1.jpeg" alt="imagem 3 ">
                </div>
    
               <div class="slide">
                <img src="image/pizza5.png" alt="imagem 4">
               </div>
    
                <!--navogation-->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
    
        </div>
    
            <div class="manual-navigation">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
    </div>

    <div class="grid-pizza">
        <a href="<?php echo URL;?>abrirlogar"><figure><img src="image/pizza_mussarela.png" alt="Pizza mussarela" class="img_pizzas" ><figcaption>Mussarela</figcaption></figure></a>
        <a href="<?php echo URL;?>abrirlogar"><figure><img src="image/pizza_calabresa.png" alt="Pizza calabresa" class="img_pizzas"><figcaption>Calabresa</figcaption></figure></a>
        <a href="<?php echo URL;?>abrirlogar"><figure><img src="image/pizza_portuguesa.png" alt="Pizza portuguesa" class="img_pizzas"><figcaption>Portuguesa</figcaption></figure></a>
        <a href="<?php echo URL;?>abrirlogar"><figure><img src="image/pizza_marguerita.png" alt="Pizza marguerita" class="img_pizzas"><figcaption>Marguerita</figcaption></figure></a>
        <a href="<?php echo URL;?>abrirlogar"><figure><img src="image/pizza_frango.png" alt="Frango com catupiry" class="img_pizzas"><figcaption>Frango com catupiry</figcaption></figure></a>
        <a href="<?php echo URL;?>abrirlogar"><figure><img src="image/pizza_napolitana.png" alt="Napolitana" class="img_pizzas"><figcaption>Napolitana</figcaption></figure></a>
    </div>


</body>
</html>



