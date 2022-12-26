<?php

require_once "CadastraProdutoController.php" ;
require_once "MarcenariaModel.php";

class ListarProduto{
    public $marcenariaModel;
    function __construct(){
        $this->macenariaModel = new MarcenariaModel;
        
    }
    public function Listar(){
        $listar = $this->macenariaModel->getProduto();
        return $listar;
    }
    public function getProduto1($cod_produto){
        $listagem = $this->macenariaModel->getProduto1($cod_produto);
        return $listagem;
    }
    
}
?>