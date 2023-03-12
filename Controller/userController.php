 <?php
 include_once 'Model/insere.php';

 class chibata{

     public function cadastrar(){

        $usu = new insere();

        $usu->nome = $_POST['nome'];
        $usu->sobrenome = $_POST['sobrenome'];
        $usu->email = $_POST['email'];
        $usu->telefone = $_POST['telefone'];
        $usu->endere = $_POST['endere'];
        $usu->senha = $_POST['senha'];
        $usu->cadastrar();

        echo"<script>
           alert('Dados Gravados');
           window.location='".URL."logar';
        </script>";
      }
          //Fale conosco

       public function fale(){

         $usu = new insere();

         $usu->nomeusuario = $_POST['nome'];
         $usu->emailusuario = $_POST['email'];
         $usu->assunto = $_POST['assunto'];
         $usu->fale();

         echo"<script>
         alert('Dados Enviados Com Sucesso');
         window.location='".URL."home';
      </script>";

       }  




 }
  