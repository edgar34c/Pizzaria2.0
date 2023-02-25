<?php

class User{

    public function home(){
         include_once "view/index.php";
        
    }

    public function abrirlogar(){
        include_once "view/login.php";
    }

    public function cadastro(){
        include_once 'view/cadastro.php';
    }

    public function fale(){
        include_once 'view/fale.php';
    }










}