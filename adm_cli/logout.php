<!doctype html>
<html lang="en">
	<head>
		<title>Logout</title>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta lang="pt-br">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="..\node_modules\mdbootstrap\css\bootstrap.min.css">
        <link rel="stylesheet" href="..\node_modules\mdbootstrap\css\mdb.min.css">
        <link rel="stylesheet" href="..\node_modules\mdbootstrap\css\style.min.css">

        <script src="../node_modules\mdbootstrap\js\jquery-3.3.1.min.js"></script>
        <script src="js/jquery-1.7.2.min.js"></script>

        <!--Font Awesome-->
        <!-- <link rel="stylesheet" href="font_awesome/css/all.css"> -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


        <link rel="stylesheet" href="../Estilo.css">

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
	<body
            onLoad="atualizaContador(
                <?php
                    if(isset($_GET['pq'])){
                        if($_GET['pq'] === 'inatividade'){
                            echo 15;
                        } else {
                            echo 5;
                        }
                    }
                ?>
                );"
    >
     <!--	Inserir um IF	 -->
		<?php
		    // catch post de inatividade
            if(isset($_GET['pq'])){
                if($_GET['pq'] === 'inatividade'){
                    echo "Sua seção expirou por ter ficado inativo por mais de 15 minutos";
                } else {
                    echo "Deslogando...";
                }
            }
        ?>
		<br/>
		<br/>
		<br/>
		<br/>
		<span id = "contador"></span>
	</body>
</html>