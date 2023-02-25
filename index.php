<?php
 include_once 'Controller/HomeController.php';
include_once 'Controller/userController.php';

//classes necessárias
 

//minha url
define('URL','http://localhost/Pizzaria2.0/');

if(isset($_GET['url']))
{
    $url = explode('/', $_GET['url']);
    switch($url[0])
    {
       case 'home':
        $usu = new user();
        $usu->home();
        break;

       case 'abrirlogar' :
        $log = new user();
        $log->abrirlogar();
        break;

        case 'cadastro' :
         $cad = new user();
         $cad->cadastro();
         break;

         case 'enviar' : //VINDO FO FORMULARIO
            $usu = new chibata();
            $usu->cadastrar(); //FUNÇÃO Q ATRIBUIMOS
            break;   
       
        case 'fale':
            $usu = new user();
            $usu->fale();
            break;



    }
     
    
       
}