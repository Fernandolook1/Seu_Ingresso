<html>
	<head>
		<title>Teste</title>
		
		<script>

			//variável representando o tempo inativo atual
			seg = 0;	
			var ss = 1;
			
			function atualizaContador(futuro) 
			{
				//alert(ss);
				//ss = (ss==1) ? futuro : ss;
				var faltam = 'Você está inativo por '+seg+' segundos segundos.';

				if (seg >= 0) 
				{
					document.getElementById('inatividade').innerHTML = faltam;
					ss++;
					setTimeout(atualizaContador,1000);	
				} 
				else 
				{
					//location.href="../";
				}
			}	
			
			
			
			//Adicionando ao document o evento a ser disparado sempre que o mouse se mover
			document.addEventListener("mousemove", function()
			{  
				//Caso seja detectado o movimento do mouse, atualizar a variável que representa o tempo de inatividade para 0 segundos
				seg = 0;
			});
			
			
			//Adicionando ao document o evento a ser disparado sempre que uma tecla for acionada
			document.addEventListener("keydown", function()
			{  
				//Caso seja detectado o movimento do mouse, atualizar a variável que representa o tempo de inatividade para 0 segundos
				seg = 0;
			});
			
			//A cada 1 segundo (a seu critério), adicionar +1 segundo de tempo de inatividade à variável "seg". Caso tenha chegado a 10 segundos, exibirá um alert.
			setInterval(function()
			{ 
				seg = seg + 1; 
				if(seg == 10)
					alert("Já se passaram" +seg+ " segundos de inatividade.");
			}, 1000);
			
			
		</script>

	</head>
	
	<!-- quando você passa a função para o documento, pode passar por parâmetro a quantidade de seg, q a pagina vai ficar  -->
	<body onLoad="atualizaContador(0);">
	
		<span id = "inatividade"></span>
		
	</body>
</html>