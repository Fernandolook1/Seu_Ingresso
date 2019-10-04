<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . '/bd/conexao.php';
	
    $sql = "update usuarios set tempo = 0 where codigo = 2";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
	
?>