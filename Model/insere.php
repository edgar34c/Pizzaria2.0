<?php

class insere
{
    public $nome;
    public $sobrenome;
    public $email;
    public $telefone;
    public $endere;
    public $senha;
    //Etapa 2
    public $nomeusuario;
    public $emailusuario;
    public $assunto;



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
            

        public function fale(){
        
            $con = Conexao::conectar();

            $cmd = $con->prepare("INSERT INTO fale(nome,email,assunto)  VALUES(:nome, :email, :assunto)");

            $cmd->bindParam(":nome",$this->nomeusuario);
            $cmd->bindParam(":email",$this->emailusuario);
            $cmd->bindParam(":assunto",$this->assunto);
            $cmd->execute();


        }



 








}