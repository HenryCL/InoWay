<?php
include_once "MarcenariaModel.php";

$marcenariaModel = new MarcenariaModel;

if(isset ($_POST['cod_cliente']) && !empty($_POST['cod-cliente'])){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telef'];
    $cep = $_POST['cep'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numeroLogradouro'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $return = $marcenariaModel->AtualizaCliente($_POST['cod_cliente'],
    $nome,$cpf,$telefone,$cep,$logradouro,$numero,$bairro,$cidade);
}else($return){
    header('location:indexusuario.php')

}

?>