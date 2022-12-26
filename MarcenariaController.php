<?php

require_once 'MarcenariaModel.php';

 class MarcenariaController{

    public function Logar($infos){
        $email = htmlspecialchars($infos['emailInput']);
        $senha = htmlspecialchars($infos['senhaInput']);
        $marcenariaModel = New MarcenariaModel;

        $result = $marcenariaModel->Login($email,$senha);
        if($result<=0){
                echo "<script language='javascript' type='text/javascript'>
                alert('Login e/ou senha incorretos')</script>";
        }else{
            $result=true;
            if($result==true){
                echo"<script>
                alert('Logado com Sucesso!');
                window.location.href = ('indexProduto.php')
                </script>";
            }
        }
         
        return $result;
       
    }
  
}