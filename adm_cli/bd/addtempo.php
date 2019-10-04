<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/bd/conexao.php';

	if( $conn === false ) 
	{
		die( print_r( $conn->errorInfo, true));
	}	
	
	$sql = "SELECT * FROM usuarios";
	$stmt = $conn->prepare($sql);
	$stmt->execute();

	if( $stmt === false) 
	{
		die( print_r( $conn->errorInfo, true) );
	}

	
	while( $row = $stmt->fetchAll(PDO::FETCH_ASSOC) )
	{		
		$codigo = $row['codigo'];
		$tempo = $row['tempo'];
		$tempo = $tempo + 10;
		$status = $row['status'];
		if($tempo > 50)
		{
			$sql = "update usuarios set status = 0, tempo = 0 where codigo = $codigo";
			$stmt = $conn->prepare($sql);
			$stmt->execute();
		}
		else if($status == 1 && $tempo <=50)
		{
			$sql = "update usuarios set tempo = $tempo where codigo = $codigo";
			$stmt = $conn->prepare($sql);
			$stmt->execute();
		}		
	}
	
?>