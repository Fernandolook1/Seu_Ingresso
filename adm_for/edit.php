<?php
	$ident = $_POST['i'];
	$acao = $_POST['acao'];
	
	if ($acao == "eproduto") 
	{
		echo "<script>alert('$ident');</script>";
		//$sql->produtos($ident);
	}
?>