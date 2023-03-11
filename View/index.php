<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
   
    <header>
        <ol>
            <li><img src="image/casa.png" id="icon_casa"></li>
            <li><a href="<?php echo URL;?>home">Página inicial</a></li>
            <li><a href="#"> <img src="image/telefone.png" id="icon_tel"></a></li>
            <li><a href="<?php echo URL;?>fale">Fale Conosco</a></li>
            <li><a href="#"> <img src="image/sobre.png" id="icon_sobre"></a></li>
            <li><a href="#">Sobre nós</a></li>
            <li><a href="$"><img src="image/login.png" id="icon_login"></a></li>
            <li><a href="<?php echo URL;?>abrirlogar">Entrar</a></li>
        </ol>

        <div class="slider">

            <div class="slides">
             <!--Radio Buttons-->
             <input type="radio" name="radio-btn" id="radio1">
             <input type="radio" name="radio-btn" id="radio2">
             <input type="radio" name="radio-btn" id="radio3">
             <input type="radio" name="radio-btn" id="radio4">
    
              <!--Slide images-->
              <div class="slide first">
                <img src="https://img.freepik.com/fotos-gratis/pizza-pizza-cheia-de-tomates-salame-e-azeitonas_140725-1200.jpg?w=2000" alt="imagem 1">
             </div>
              <div class="slide">
                <img src="https://st3.depositphotos.com/1868027/15009/i/450/depositphotos_150093080-stock-photo-italian-pizza-tomatoes-salami-black.jpg" alt="imagem 2 ">
               </div>
               <div class="slide">
                <img src="https://s.yimg.com/ny/api/res/1.2/SEMowe8X4DsmdX7uum7gYg--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MDtoPTM4Mw--/https://s.yimg.com/os/creatr-uploaded-images/2021-10/c5fd29a0-2b9f-11ec-b3ff-30a01d58d24a" alt="imagem 3 ">
               </div>
    
               <div class="slide">
                <img src="https://viagemegastronomia.cnnbrasil.com.br/wp-content/uploads/sites/5/2022/04/La-Braciera_Pizza-Italiana_Neuton-Araujo.jpg" alt="imagem 4 ">
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
    </header>
</body>
</html>



