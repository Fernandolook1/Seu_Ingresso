<?php
    require_once "bd/conexao.php";//$conn

    // teste
    if(isset ($_POST) && !empty($_POST)) 
	{

        $email = $_POST["txtEmail"];
        $senha = $_POST["txtSenha"];
        $razao_social = $_POST["txtRazaoSocial"];
        $nome_fantasia = $_POST["txtNomeFantasia"];
        $cnpj = $_POST["txtCNPJ"];
		$tel = $_POST["txtTelefone"];
		
	
		$stmt = $conn->prepare("SELECT email FROM Fornecedores where email = '$email'");// conta a quantidade de chaves no banco de dados
		$stmt-> execute();
		$indice = 'email';//indice do email
		$result_email = Indice_1($stmt, $indice);

		
		$stmt = $conn->prepare("SELECT CNPJ FROM Fornecedores where CNPJ = '$cnpj'");// conta a quantidade de chaves no banco de dados
		$stmt-> execute();
		$indice = 'CNPJ';//indice do cnpj
		$result_cnpj = Indice_1($stmt, $indice);

		if ($result_email != $email) {

			if ($result_cnpj != $cnpj ) {

				$total = 'total';
				$stmt = $conn->prepare("SELECT COUNT(ID_Fornecedor) as $total FROM Fornecedores");// conta a quantidade de chaves no banco de dados
				$stmt-> execute();

				$id = Indice_1($stmt, $total);
                $ddd = '011';

				$id+=1;//soma mais um com o retorno do banco de dados
				$stmt = $conn->prepare("INSERT INTO FORNECEDORES (ID_FORNECEDOR, CNPJ, Razao_Social, Nome_Fantasia, DDD, Telefone)
                  VALUES (:ID_FORNECEDOR,:CNPJ, :RAZAO_SOCIAL, :NOME_FANTASIA, :DDD, :TELEFONE)
                ");
				$stmt->bindParam(":ID_FORNECEDOR", $id);
				$stmt->bindParam(":CNPJ", $cnpj);
				$stmt->bindParam(":RAZAO_SOCIAL", $razao_social);
				$stmt->bindParam(":NOME_FANTASIA", $nome_fantasia);
				$stmt->bindParam(":DDD", $ddd);
				$stmt->bindParam(":TELEFONE", $tel);
				$stmt->execute();

                $id_fornecedor = $id;
                $total = 'total';
                $stmt = $conn->prepare("SELECT COUNT(Codigo) as $total FROM Usuarios");// conta a quantidade de chaves no banco de dados
                $stmt-> execute();

                if(!$stmt){
                    echo "<script>alert($stmt->errorInfo()+'.');</script>";
                }

                $id = Indice_1($stmt, $total);
                $tipo = 3;
                $nivel_acesso = $tipo;

                $stmt = $conn->prepare("INSERT INTO Usuarios(Codigo, ID_Origem, Tipo_Origem, Email, Senha, Nivel_Acesso)
                  VALUES(:Codigo, :ID_Origem, :Tipo_Origem, :Email, :Senha, :Nivel_Acesso)
                ");
                $stmt->bindParam(":Codigo", $id);
                $stmt->bindParam(":ID_Origem", $id_fornecedor);
                $stmt->bindParam(":Tipo_Origem", $tipo);
                $stmt->bindParam(":Email", $email);
                $stmt->bindParam(":Senha", $senha);
                $stmt->bindParam(":Nivel_Acesso", $tipo);
                $stmt->execute();

                if(!$stmt){
                    echo "<script>alert($stmt->errorInfo()+'.');</script>";
                }

				echo "<script>alert('Fornecedor cadastro  com sucesso!');</script>";

			} else{
				echo "<script>alert('O CNPJ: $cnpj, já possui cadastro!');</script>";
			}
			
		}else {
				echo "<script>alert('O e-mail: $email já existe, favor digitar um novo e-mail');</script>";

			}
	}
?>