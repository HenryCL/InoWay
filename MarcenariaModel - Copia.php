<?php
// error_reporting(E_ALL);

// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);



 class MarcenariaModel{

    private $conexao;

    function __construct(){
        $this-> conexao = $this->Conexao();
    }
    public function Conexao(){

        // $env = parse_ini_file('.env');
        
   
        
        $servidor = 'localhost';
        $usuario = 'id19809901_dbmariosantana';
        $senha ='Gwtw4598213+';
        $bancoDeDados ='id19809901_marcenariams';
        $porta = '3306';

        $mysqli = new mysqli($servidor,$usuario,$senha,$bancoDeDados,$porta);
        if($mysqli->connect_errno){
            echo "Failed to connect to MySQL: (". $mysqli->connect_errno. ")" . $mysqli->connect_error;
        }

        return $mysqli;
    }

    public function Login($email,$senha){
        $logar = $this->conexao->prepare("SELECT * FROM  cliente WHERE  email=? AND senha=? ");
        $logar->bind_param('si', $email,$senha );
        $logar->execute();
        $result = $logar->get_result();
        $row = $result->fetch_assoc();

        return $row;
    }

    public function CadastroCliente($nome,$email,$senha,$logradouro="",$numero="",$bairro="",$cep="",$cidade="",$telefone=""){
        $cadastroCliente = $this->conexao->prepare("INSERT INTO cliente (nome,cpf,email,senha,logradouro,numero,bairro,cep,cidade,telefone)
        VALUES (?,?,?,?,?,?,?,?,?,?)");
        $a  = $cadastroCliente->bind_param('sisssisiss',$nome,$cpf,$email,$senha,$logradouro,$numero,$bairro,$cep,$cidade,$telefone);
       $result =  $cadastroCliente->execute();
       #var_dump($this->conexao);
      var_dump($a);die;
      
    }
    public function AtualizaCliente($cod_cliente,$nome,$cpf,$email,$senha,$logradouro,$numero,$bairro,$cep,$cidade,$telefone){
        $atualizaCliente = $this->conexao->prepare("UPDATE cliente SET nome = ?, cpf = ?, email = ?, senha = ?, logradouro = ?, numero = ?, bairro = ?, cep = ?, cidade = ,telefone = ? WHERE cod_cliente = ?");
        $atualizaCliente->bind_param('sisssisissi', $nome,$cpf,$email,$senha,$logradouro,$numero,$bairro,$cep,$cidade,$telefone,$cod_cliente);
        $atualizaCliente->execute();
        return $atualizaCliente->affected_rows;
    }
    public function CadastroProduto($descricao,$classificacao,$particoes,$material,$precoVenda,$espessura,$altura,$largura,$profundidade){
        $cadastroProduto = $this->conexao->prepare("INSERT INTO produto (descricao,classificacao,particoes,material,precoVenda,espessura,altura,largura,profundidade)
        VALUES (?,?,?,?,?,?,?,?,?)");
        $cadastroProduto->bind_param('ssisddddd',$descricao,$classificacao,$particoes,$material,$precoVenda,$espessura,$altura,$largura,$profundidade);
        $cadastroProduto->execute();
        return $cadastroProduto->affected_rows;
    }
    public function AtualizaProduto($cod_produto,$descricao,$classificacao,$particoes,$material,$precoVenda,$espessura,$altura,$largura,$profundidade){
        $atualizaProduto =$this->conexao->prepare("UPDATE produto  SET descricao = ?,classificacao = ?,particoes = ?,material = ?,espessura = ?,altura = ?,largura = ?, profundidade = ? WHERE cod_produto = ?");
        $atualizaProduto = bind_param('ssessddddi');
        $$atualizaProduto->execute();
        return $atualizaProduto->affected_rows;
    }
    public function getProduto1($cod_produto){
        $getProduto = $this->conexao->query("SELECT * FROM produto WHERE cod_produto=".$cod_produto);
        return $getProduto->fetch_array();
    }
    public function getProduto(){
        $getProduto1 = $this->conexao->query("SELECT * FROM produto");
        return $getProduto1->fetch_all(MYSQLI_ASSOC);
    }
    public function DeletarProduto($cod_produto){
        $delete  = $this->conexao->prepare("DELETE FROM produto WHERE cod_produto=?");
        $delete->bind_param('i',$cod_produto);
        $delete->execute();
        return $delete->affected_rows;
    }
    public function Estoque($cod_produto){
       $estoque = $this->conexao->query("SELECT COUNT (cod_produto) FROM produto WHERE descrição =? ");
       return $estoque->fetch_all(MYSQLI_ASSOC);
       
    }
}