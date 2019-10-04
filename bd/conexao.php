<?php
	require_once  $_SERVER['DOCUMENT_ROOT'] . "/function/function_php.php";

	$conn = new PDO("mysql:dbname=mrcake; host=localhost", "root", "");

	function getConnection(){
	    return new PDO("mysql:dbname=mrcake; host=localhost", "root", "");
    }

    class sqlCliente
    {

        public $senha;
        public $cpf;
        public $nome;
        public $nascimento;
        public $tel;
        public $cel;
        public $id_origem;

        public function __construct()
        {
            $this->conn = new PDO("mysql:dbname=mrcake; host=localhost", "root", "");
        }

        public function adm()
        {
            $sql = "SELECT * FROM administradores";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            if( $stmt === false)
            {
                die( print_r( $this->conn->errorInfo(), true) );
            }

            while( $row = $stmt->fetchAll(PDO::FETCH_ASSOC) )
            {
                echo $row['codigo'].", ".$row['nome']."<br />";
            }

        }

        public function verifica($email)
        {
            $sql = "SELECT count(*) total FROM usuarios where email = '$email'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            if( $stmt === false)
            {
                die( print_r( $this->conn->errorInfo(), true) );
                header("location:logout.php");
            }

            $row = Indice_1($stmt, 'total');

            if($row!= 1)
            {
                header("location:logout.php");
            }
            //echo "<script>alert('$row2');</script>";

            /*
            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) )
            {
                if($row['status'] != 1)
                {
                    header("location:logout.php");
                }
                //echo $row['status'];
            }
            */
        }
        public function dados($email)
        {


            global $senha;
            global $cpf;
            global $nome;
            global $nascimento;
            global $tel;
            global $cel;
            global $id_origem;

            $sql = "SELECT id_origem, senha FROM usuarios where email = '$email'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            if( $stmt === false)
            {
                die( print_r( $this->conn->errorInfo(), true) );
                header("location:logout.php");
            }
            //echo "<script>alert('$email');</script>";
            foreach( $stmt->fetchAll(PDO::FETCH_ASSOC) as $row)
            {
                $senha = $row['senha'];
                $id_origem = $row['id_origem'];
            }

            $sql = "SELECT cpf, nome, telefone, celular FROM clientes where id_cliente = '$id_origem'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            if( $stmt === false)
            {
                die( print_r( $this->conn->errorInfo(), true) );
                header("location:logout.php");
            }

            foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $row )
            {
                $cpf = $row['cpf'];
                $nome = $row['nome'];
                //$nascimento = $row['nascimento'];
                //$nascimento = "1987-04-10";
                $tel = $row['telefone'];
                $cel = $row['celular'];
            }

        }
        private function get_historico_compras($id_cliente, $status){

            $sql = "SELECT codigo, num_pedido, id_cliente, id_produto, `status`, cod_endereco_entrega FROM Pedidos WHERE id_cliente = $id_cliente AND status = $status"; // aqui status = 1 significa recebido
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            if($stmt === false){
                die(print_r($this->conn->errorInfo(), true));
                header("location:logout.php");
            }
            $results = array();

            foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $row){
                array_push($results, $row);
            }

            return $results;
        }
        public function get_historico_compras_em_aguardo($id_cliente){
            return $this->get_historico_compras($id_cliente, 0);
        }
        public function get_historico_compras_entregues($id_cliente){
            return $this->get_historico_compras($id_cliente, 1);
        }
    }
	/*
    $email = 'Fernadolo11ok1@outlook.com1';
    $senha = '11';
    $stmt = $conn->prepare("SELECT senha FROM Clientes where senha = '$senha' AND where email = $email");
    $stmt-> execute();
    var_dump($stmt);
    $indice = 'senha';
    $result_senha =  Indice_1($stmt, $indice);//retorna a senha
    echo "$result_senha";
    var_dump($result_senha);
	*/


	class Produto {
	    public $id_produto;
	    public $nome;
	    public $descricao;
	    public $preco;
    }

    class sqlFornecedor
    {
        public $senha;
        public $nf;
        public $rs;
        public $cnpj;
        public $tel;
        public $id_origem;
        public $preco;
        public $produto;
        public $descricao;


        public function __construct()
        {
            $this->conn = new PDO("mysql:dbname=mrcake; host=localhost", "root", "");
        }

        public function adm()
        {

            $sql = "SELECT id_fornecedor, cnpj, razao_social, nome_fantasia, ddd, telefone FROM administradores";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            if( $stmt === false)
            {
                die( print_r( $this->conn->errorInfo(), true) );
            }

            foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $row)
            {
                echo $row['codigo'].", ".$row['nome']."<br />";
            }
        }

        public function verifica($email)
        {
            global $senha;
            global $nf;
            global $rs;
            global $cnpj;
            global $tel;
            global $id_origem;

            $sql = "SELECT codigo, id_origem, tipo_origem, email, senha, nivel_acesso FROM usuarios where email = '$email'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            if( $stmt === false)
            {
                die( print_r( $this->conn->errorInfo(), true) );
                header("location:logout.php");
            }

            $senha = $stmt->fetch(PDO::FETCH_ASSOC)['senha'];

            return $senha;
        }

        public function dados($email)
        {
            global $senha;
            global $nf;
            global $rs;
            global $cnpj;
            global $tel;
            global $id_origem;

            $sql = "SELECT codigo, id_origem, tipo_origem, email, senha, nivel_acesso FROM usuarios where email = '$email'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            if( $stmt === false)
            {
                die( print_r( $this->conn->errorInfo(), true) );
                header("location:logout.php");
            }

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            $senha = $row['senha'];
            $id_origem = $row['id_origem'];

            $sql = "SELECT id_fornecedor, cnpj, razao_social, nome_fantasia, ddd, telefone FROM fornecedores where id_fornecedor = '$id_origem'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            if( $stmt === false)
            {
                die( print_r( $this->conn->errorInfo(), true) );
                header("location:logout.php");
            }

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            $nf = $row['nome_fantasia'];
            $rs = $row['razao_social'];
            $cnpj = $row['cnpj'];
            $tel = $row['telefone'];

        }

        public function getProdutos($email)
        {
            $sql = "SELECT id_fornecedor FROM Fornecedores INNER JOIN Usuarios ON ID_FORNECEDOR = ID_ORIGEM WHERE email = '$email'";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            if( $stmt === false)
            {
                die( print_r( $this->conn->errorInfo(), true) );
            }

            if($stmt->rowCount() == 0){
                echo "<script>alert('Erro acessando dados do fornecedor')</script>";
                return;
            }

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            $id_fornecedor = $row['id_fornecedor'];

            $sql = "SELECT id_produto, nome, descricao, preco FROM produtos where id_fornecedor = $id_fornecedor";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            if( $stmt === false)
            {
                die( print_r( $this->conn->errorInfo, true) );

            }

            $produtos = array();

            foreach( $stmt->fetchAll(PDO::FETCH_ASSOC)  as $row)
            {
                $produto = new Produto();

                $produto->id_produto = $row['id_produto'];
                $produto->preco = $row['preco'];
                $produto->nome = $row['nome'];
                $produto->descricao = $row['descricao'];

                array_push($produtos, $produto);
            }

            return $produtos;
        }

        public function modalEditar($i)
        {
            global $preco;
            global $produto;
            global $descricao;

            $sql = "SELECT nome, descricao, preco FROM produtos where id_produto = '$i'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            if( $stmt === false)
            {
                die( print_r( $this->conn->errorInfo(), true) );

            }

            foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $produto)
            {
                $preco = $produto['preco'];
                $produto = $produto['nome'];
                $descricao = $produto['descricao'];
            }
        }
    }
?>