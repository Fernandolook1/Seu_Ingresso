<nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo scrolling-navbar">
	<!-- Navbar brand -->
	<a class="navbar-brand" href="#">
		<img class="rounded" src="Imagens\assets\MR CAKE LOGO TEXT.png" width="auto" height="40" alt="Mr Cake Logo">
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
				<a class="nav-link" id = "home" href="#">Home
					<span class="sr-only">(current)</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="" data-toggle="modal" data-target="#modalLoginFormCliente">Área dos Clientes</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="" data-toggle="modal" data-target="#modalLoginFormFornecedor">Área dos Fornecedores</a>
			</li>
				  <!-- Dropdown -->
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
					  aria-expanded="false">
					Registrar
				</a>
				<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalRegistroCliente">
						Cliente
					</a>
					<a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalRegistroFornecedor">
						Fornecedor
					</a>
				</div>
			</li>
		</ul>

		<!-- Links -->
<!--		<form class="form-inline my-2 my-lg-0 ml-auto">-->
<!--			<input class="form-control " type="search" placeholder="Pesquisar" aria-label="Search">-->
<!--			<button class="btn btn-md my-2 my-sm-0 ml-3 btn-pink" type="submit">Search</button>-->
<!--		</form>-->
	</div>
	<!-- Collapsible content -->
</nav>