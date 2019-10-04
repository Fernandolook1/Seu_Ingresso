<?php
	require_once "bd/conexao.php";

	$email = $_POST['txtEmailLoginCliente'];
	$senha = $_POST['txtSenhaLoginCliente'];


    $stmt = $conn->prepare("SELECT senha, email FROM usuarios where senha = '$senha' AND email = '$email' ");
    $stmt-> execute();

    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($resultado as $key => $value) {
        $result_senha = $value['senha'];
        $result_email = $value['email'];
    }


    if ($email == $result_email AND $result_senha === $senha) {
        //verifica o email e senha se for igual o login e aceito
        echo "<script>alert($result_senha, $result_email);</script>";

        echo "<script>window.location.replace('/adm_cli/index.php?email=$email&senha=$senha');</script>";

    } else{
        echo "<script>alert('Usuário ou senha inválida');</script>";

    }

	
	
?>