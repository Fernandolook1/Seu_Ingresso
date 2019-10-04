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
	
	//$sql = new sqlCliente();
	
	//$sql->adm();


    // jefferson tests ( gambiarra em cima de gambiarra)

    $cliente = new sqlCliente();

    $cliente->dados('a@b.com');

    include_once "historico_compras.php";

    if (($errors = $conn->errorInfo) != null) {
        foreach ($errors as $error) {
            echo "SQLSTATE: " . $error['SQLSTATE'] . "</br>";
            echo "\n code: " . $error['code'] . "</br>";
            echo "\n message: " . $error['message'] . "</br>";
        }
        echo "(App) Estagio: $estagio";
        echo "(App) SQL INSERT FORNECEDOR: " . $sql_insert_fornecedor;
        echo "(App) SQL INSERT USUARIO   : " . $sql_insert_usuarios;
    }
?>