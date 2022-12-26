<?php
include_once "MarcenariaModel.php";
$marcenariaModel = new MarcenariaModel;

$cod_produto = isset($_GET['cod_produto']) ? $_GET['cod_produto'] : '';
$return =  $marcenariaModel->DeletarProduto($cod_produto);

if($return){
    echo"<script>
        alert('Deletado com Sucesso!');
         window.location.href = ('indexProduto.php')
        </script>";
}
?>