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
            

        public function fale(){
        
            $con = Conexao::conectar();

            $cmd = $con->prepare("INSERT INTO fale(Nome,Email,Assunto)  VALUES(:Nome, :Email, :Assunto)");

            $cmd->bindParam(":Nome",$this->nome);
            $cmd->bindParam(":Email",$this->email);
            $cmd->bindParam(":Assunto",$this->assunto);
            $cmd->execute();


        }



 








}