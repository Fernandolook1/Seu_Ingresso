<!doctype html>
<html lang="en">
  <head>
	<title>Área do cliente</title>
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
	<link rel="stylesheet" href="css/estilo.css">
	
	
	
	<?php 
	
		include "js/funcao.php";
		require_once $_SERVER['DOCUMENT_ROOT'] . "/bd/conexao.php";
		
		$email = $_GET['email'];

		//echo "<div style = 'margin: 0 auto;width: 90%;'>$email</div>";
		$sql = new sqlFornecedor();
		
		$sql->verifica($email);		
		$sql->dados($email);
	
	?>

      <script>
          function atualizaContador(n){
              return;
          }
      </script>
  </head>
  <body onLoad="atualizaContador(0);">
    <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ Navbar ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
     <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
     <nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo scrolling-navbar">

          <!-- Navbar brand -->
          <a class="navbar-brand" href="#">
                <img class="rounded" src="../MR CAKE LOGO TEXT.png" width="auto" height="40" alt="Mr Cake Logo">
          </a>

          <!-- Collapse button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
               aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Collapsible content -->
          <div class="collapse navbar-collapse" id="basicExampleNav">
               <!-- Links -->
               <ul class="navbar-nav mr-auto">
                   <li class="nav-item active">
                       <a class="nav-link" href="index.php?email=<?php echo $email ?>">Home
                           <span class="sr-only">(current)</span>
                       </a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="logout.php?pq=usuario">Logout</a>
                   </li>
					<!--não sei pq ta aqui-->
                    <li class="nav-item">
                         <a class="nav-link" href="">Produtos</a>
                    </li>
					<li class="nav-item">
                         <a data-toggle="modal" aria-controls="modalCadastroProduto" id="buttonCriarProduto" class="nav-link" href="#modalCadastroProduto">Criar produto</a>
                    </li>
					
                    <!-- Dropdown -->
               </ul>
               <!-- Links -->
               <form class="form-inline my-2 my-lg-0 ml-auto">
                    <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-md my-2 my-sm-0 ml-3 btn-pink" type="submit">Ir</button>
               </form>
			   
			   
          </div>
          <!-- Collapsible content -->
     </nav>
     <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ /.Navbar ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
     <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
    
     </div>
     
     <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ Nav Pills ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
     <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■­■■■■■■■■■-->

	<div class="container"style="margin-top:100px;margin-bottom:100px;">

		<ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-vendas" role="tab" aria-controls="pills-vendas" aria-selected="true">Vendas</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-perfil" role="tab" aria-controls="pills-perfil" aria-selected="false">Perfil</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-product-tab" data-toggle="pill" href="#pills-produtos" role="tab" aria-controls="pills-produtos" aria-selected="false">Produtos</a>
			</li>
		</ul>



		<div class="tab-content" id="pills-tabContent">

			<!--Histórico de vendas-->
			
				<?php include "historico_vendas.php"; ?>
			
			<!--Fim do histórico de vendas-->
			
			<!--perfil-->
			
				<?php include "perfil.php"; ?>
			
			<!--Fim do perfil-->
			
			<!--Produtos-->
			
				<?php include "produtos.php"; ?>
			<!--Fim dos produtos-->
			
		</div>
	</div>
	
	<div class = "cria_produtos">
		<?php include "modal_registro_produto.php"; ?>
	</div>
	
	<div class = "editar_produtos">
		<?php include "modal_editar_produtos.php"; ?>
	<div>

    
	 <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ /. Nav Pills ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
     <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■­■■■■■■■■■-->

		<!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ Footer ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
		<!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
		
			<?php include "footer.php"; ?>

		<!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ /.Footer ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
		<!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->


		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="..\node_modules\mdbootstrap\js\jquery-3.3.1.min.js"></script>
		<script src="..\node_modules\mdbootstrap\js\popper.min.js"></script>
		<script src="..\node_modules\mdbootstrap\js\bootstrap.js"></script>
		<script src="..\node_modules\mdbootstrap\js\bootstrap.min.js"></script>
		<script src="..\node_modules\mdbootstrap\js\mdb.js"></script>
		<script src="..\node_modules\mdbootstrap\js\mdb.min.js"></script>
	</body>
</html>