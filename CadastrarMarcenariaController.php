<?php

require_once  ("MarcenariaModel.php");

 class CadastrarMarcenariaController{

    public function Cadastrar($dados){

    $nome = $dados['nome'];
    $email = $dados['emailInput'];
    $senha = $dados['senhaInput'];
  
    $marcenariaModel = new MarcenariaModel;

    $result = $marcenariaModel->CadastroCliente(
        $nome,
        $email,
        $senha,
        $logradouro="",
        $numero="",
        $bairro="",
        $cep="",
        $cidade="",
        $telefone=""
        );

    if(($result == 1)){
        echo"<script>
        alert('Registro incluído com sucesso!');
        header('Location: index.php');
        </script>";
        
    }else{
        
        echo "<script>alert('Erro ao gravar registro!')</script>";
        
    }
    }
}