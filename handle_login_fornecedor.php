<?php
	require_once "bd/conexao.php";
	
	
	
	if(isset ($_POST) && !empty($_POST))
	{
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		$sql = "SELECT email, senha FROM usuarios WHERE email = '$email' and senha='$senha'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();

		if($stmt)
		{
			if ($stmt->rowCount() == 0)
			{							
				echo "<script>alert('Usuário ou senha inválida');</script>";
			}
			
		}
		
		foreach( $stmt->fetchAll( PDO::FETCH_ASSOC) as $row) {
            if ($email == $row['email'] && $senha == $row['senha']) {
                //$sql = "UPDATE USUARIOS SET status = 1 WHERE email = '$email'";
                //$stmt = $conn->prepare($sql);
                //$stmt->execute();

                // TODO: Usar token, ex: Af4F4f3KK49 ou 242524. Na barra da URL ou como cache.
                echo "<script>window.location.replace('/adm_for/index.php?email=$email');</script>";
            } else {
                echo "<script>alert('Usuário ou senha inválida');</script>";
            }
        }
	}
	else
	{
		echo "</script>alert('erro -> POST INVALIDO');</script>";
	}
	
?>