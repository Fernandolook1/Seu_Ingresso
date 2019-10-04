<html>
	<head>
		<title>Logout</title>
		
		<script type="text/javascript">
			var ss = -1;
			function atualizaContador(futuro) 
			{
			  ss = (ss==-1) ? futuro : ss;
			  var faltam =  'Você será redirecionado em <span id = "diminui">'+ss+'</span> segundos.';

			  if (ss > 0) 
			  {
				document.getElementById('contador').innerHTML = faltam;
				ss--;
				setTimeout(atualizaContador,1000);	
			  } 
			  else 
			  {
				location.href="../";
			  }
			}
		</script>
		
		<style>
			#contador
			{
				font-size: 170%;
				font-style: italic;
				font-weight: 900;
			}
			#diminui
			{
				color: red;				
			}
		</style>
		
	</head>
	
	<!-- quando você passa a função para o documento, pode passar por parâmetro a quantidade de seg, q a pagina vai ficar  -->
	<body onLoad="atualizaContador(5);">
		<?php
            if($_GET['pq'] !== 'usuario'){
                echo "Sua seção expirou por ter ficado inativo por mais de 5 minutos";
            }
        ?>
		<br/>
		<br/>
		<br/>
		<br/>
		<span id = "contador"></span>
	</body>
</html>