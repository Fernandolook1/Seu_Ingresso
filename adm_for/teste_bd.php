<?php
	error_reporting(0);

	require_once "bd/sql.php";
	
	/*
	$sql = "SELECT * FROM administradores";
	$stmt = sqlsrv_query( $conn, $sql );
	if( $stmt === false) {
		die( print_r( $conn->errorInfo, true) );
	}
	
	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
		  echo $row['codigo'].", ".$row['nome']."<br />";
	}
	
	sqlsrv_free_stmt( $stmt);
	
	*/
	
	//$query		= $Conexao -> query("select id, nome, idade FROM dbo.bla");
	//$produtos	= $query -> fetchAll();
	
	$sql = new sqlFornecedor();
	
	$sql->adm();

?>