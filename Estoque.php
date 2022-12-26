<?php
require_once"MarcenariaModel.php";
include_once "MarcenariaModel.php";

$marcenariaModel = new MarcenariaModel;

  function BuscaEstoque($cod_produto){
      $buscaEstoque =  $marcenariaModel->Estoque($cod_produto);
      return $buscaEstoque;
   
}

?>