<?php

include_once "MarcenariaModel.php";
include_once "ListarProduto.php";
include_once "DeletarProduto.php";
 class CadastrarProdutoController{



public function CadastroProduto($dados){
$marcenariaModel = new MarcenariaModel;
// var_dump($dados);

// if(isset($_POST['cod_produto']) && !empty($_POST['cod_produto'])){
//     $descricao = $dados['descricao_item'];
//     $classificacao = $dados['classificacao'];
//     $particoes = $dados['particoes_item'];
//     $material = $dados['material_item'];
//     $precoVenda = $dados['preco_item'];
//     $espessura = $dados['espessura_item'];
//     $altura = $dados['altura_item'];
//     $largura = $dados['largura_item'];
//     $profundidade = $dados['profund_item'];
//     $return = $marcenariaModel->AtualizaProduto($_POST['cod_produto'],
//     $descricao,$classificacao,$particoes,$material,$precoVenda,$espessura,
//     $altura,$largura,$profundidade);
if(isset($_POST['cod_produto'])){
    // $cod_produto = $dados['cod_produto'];
    $descricao =$dados['descricao_item'];
    $classificacao = $dados['classificacao'];
    $particoes = $dados['particoes_item'];
    $material = $dados['material_item'];
    $precoVenda = $dados['preco_item'];
    $espessura = $dados['espessura_item'];
    $altura = $dados['altura_item'];
    $largura = $dados['largura_item'];
    $profundidade = $dados['profund_item'];

    $return = $marcenariaModel->CadastroProduto($descricao,$classificacao,$particoes,$material,$precoVenda,$espessura,$altura,$largura,$profundidade);
}else{
    echo"<script>
    window.alert('Cadastrado com sucesso!')
    header('location: indexProduto.php')
    </script>";
}

}

}
?>