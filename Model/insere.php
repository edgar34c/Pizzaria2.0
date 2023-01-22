<?php

class insere
{
    public $nome;
    public $sobrenome;
    public $email;
    public $telefone;
    public $endere;
    public $senha;


public function __construct()
{
    include_once 'conection.php';
    
}

public function cadastrar(){
     $con = Conexao::conectar();
      
     $cmd = $con->prepare("INSERT INTO  usuario(nome,sobrenome,email,telefone,endere,senha)
    
     VALUES(:nome, :sobrenome, :email, :telefone, :endere, :senha)");

     //ENVIAR VALORES 
     $cmd->bindParam(":nome", $this->nome);
     $cmd->bindParam(":sobrenome",$this->sobrenome);
     $cmd->bindParam(":email", $this->email);
     $cmd->bindParam(":telefone", $this->telefone);
     $cmd->bindParam(":endere", $this->endere);
     $cmd->bindParam(":senha", $this->senha);
     $cmd->execute();
}
 public function logar()
 {
    $con = Conexao::conectar();
    $cmd = $con->prepare("SELECT * FROM usuario WHERE email == $this->email and senha == $this->senha");

    echo"<script>
    alert('foi');
    window.location='".URL."home';
 </script>";
    

      
 }








}