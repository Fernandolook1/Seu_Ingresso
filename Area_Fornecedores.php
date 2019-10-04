<!doctype html>
<html lang="pt">
     <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="node_modules\mdbootstrap\css\bootstrap.css">
          <link rel="stylesheet" href="node_modules\mdbootstrap\css\bootstrap.min.css">
          <link rel="stylesheet" href="node_modules\mdbootstrap\css\mdb.css">
          <link rel="stylesheet" href="node_modules\mdbootstrap\css\mdb.min.css">
          <link rel="stylesheet" href="node_modules\mdbootstrap\css\style.css">
          <link rel="stylesheet" href="node_modules\mdbootstrap\css\style.min.css">
                    
          
          <link rel="stylesheet" href="Estilo.css">
          <title>Hello, world!</title>
     </head>

     <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ Navbar ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
     <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
     <nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo scrolling-navbar">

          <!-- Navbar brand -->
          <a class="navbar-brand" href="#">
                <img class="rounded" src="MR CAKE LOGO TEXT.png" width="auto" height="40" alt="Mr Cake Logo">
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
                         <a class="nav-link" href="Home.html">Home
                              <span class="sr-only">(current)</span>
                         </a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="">Produtos</a>
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
                              aria-expanded="false">Registrar</a>
                         <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalRegistro">Cliente</a>
                              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalRegistro">Fornecedor</a>
                         </div>
                    </li>



               </ul>
               <!-- Links -->
               <form class="form-inline my-2 my-lg-0 ml-auto">
                    <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-md my-2 my-sm-0 ml-3 btn-pink" type="submit">Search</button>
               </form>
          </div>
          <!-- Collapsible content -->
     </nav>
     <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ /.Navbar ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
     <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->

     <body>
          <div class="container">
               <h1>Hello, world!</h1>
               <p>testestesteste</p>
          </div>
     <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ Modal Login Clientes ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
     <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■­■■■■■■■■■-->
          <div class="modal fade" id="modalLoginFormCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                    <div class="modal-content">
                         <div class="modal-header text-center">
                              <h4 class="modal-title w-100 font-weight-bold" style="color:darkslategray">Login - Área dos Cliente</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                              </button>
                         </div>
                         <div class="modal-body mx-3">
                              <div class="md-form mb-5">
                                   <i class="fa fa-envelope prefix grey-text"></i>
                                   <input type="email" id="defaultForm-email" class="form-control validate">
                                   <label data-error="wrong" data-success="right" for="defaultForm-email">E-mail</label>
                              </div>

                              <div class="md-form mb-4">
                                   <i class="fa fa-lock prefix grey-text"></i>
                                   <input type="password" id="defaultForm-pass" class="form-control validate">
                                   <label data-error="wrong" data-success="right" for="defaultForm-pass">Senha</label>
                              </div>
                         </div>
                         <div class="modal-footer d-flex justify-content-center">
                              <button class="btn btn-default">Login</button>
                         </div>
                    </div>
               </div>
          </div>

     <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ /.Modal Login Clientes ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
     <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■­■■■■■■■■■■■■■■■■■■■■-->

     <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ Modal Login Fornecedores ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
     <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■­■■■■■■■■■-->
          <div class="modal fade" id="modalLoginFormFornecedor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                    <div class="modal-content">
                         <div class="modal-header text-center">
                              <h4 class="modal-title w-100 font-weight-bold" style="color:darkslategray">Login - Área dos Fornecedores</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                              </button>
                         </div>
                         <div class="modal-body mx-3">
                              <div class="md-form mb-5">
                                   <i class="fa fa-envelope prefix grey-text"></i>
                                   <input type="email" id="defaultForm-email" class="form-control validate">
                                   <label data-error="wrong" data-success="right" for="defaultForm-email">E-mail</label>
                              </div>

                              <div class="md-form mb-4">
                                   <i class="fa fa-lock prefix grey-text"></i>
                                   <input type="password" id="defaultForm-pass" class="form-control validate">
                                   <label data-error="wrong" data-success="right" for="defaultForm-pass">Senha</label>
                              </div>
                         </div>
                         <div class="modal-footer d-flex justify-content-center">
                              <button class="btn btn-default">Login</button>
                         </div>
                    </div>
               </div>
          </div>

     <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ /.Modal Login Fornecedores ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
     <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■­■■■■■■■■■■■■■■■■■■■■■■■■-->

     <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ Modal Login Registrar Cliente ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
     <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■­■■■■■■■■■-->

     <div class="modal fade" id="modalRegistro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
               <div class="modal-content">
                    <div class="modal-header text-center">
                         <h4 class="modal-title w-100 font-weight-bold" style="color:darkslategray">Novo Cliente</h4>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                         </button>
                    </div>
                    <div class="modal-body mx-3">
                         <div class="md-form mb-5">
                              <i class="fa fa-user prefix grey-text"></i>
                              <input type="text" id="orangeForm-name" class="form-control validate">
                              <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
                         </div>
                         <div class="md-form mb-5">
                              <i class="fa fa-envelope prefix grey-text"></i>
                              <input type="email" id="orangeForm-email" class="form-control validate">
                              <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
                         </div>

                         <div class="md-form mb-4">
                              <i class="fa fa-lock prefix grey-text"></i>
                              <input type="password" id="orangeForm-pass" class="form-control validate">
                              <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
                         </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                         <button class="btn btn-deep-orange">Sign up</button>
                    </div>
               </div>
          </div>
     </div>

     <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ /.Modal Login Registrar Cliente ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
     <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■­■■■■■■■■■-->


               <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ Carousel ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
               <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->

               <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                    <li data-target="#carousel-example-2" data-slide-to="2"></li>
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                         <div class="view">
                         <img class="float-none img-fluid mx-auto rounded" src="Imagens\Produtos\bolo_red_velvet.jpg" alt="First slide" style="width: 70%; height:400px">
                         <div class="mask rgba-black-slight"></div>
                         </div>
                         <div class="carousel-caption mx-auto" style="background-color:rgba(0, 0, 0, .5); width:auto">
                         <h3 class="h3-responsive">Red Velvet</h3>
                         <p>Clássico bolo americano red velvet tingido de maneira natural e cobertura de cream cheese com um toque especial</p>
                         </div>
                    </div>
                    <div class="carousel-item">
                         <!--Mask color-->
                         <div class="view">
                         <img class="img-fluid mx-auto rounded" src="Imagens\Produtos\kitkat.jpg" alt="Second slide" style="width: 70%; height:400px">
                         <div class="mask rgba-black-slight"></div>
                         </div>
                         <div class="carousel-caption mx-auto" style="background-color:rgba(0, 0, 0, .7); width:auto">
                         <h3 class="h3-responsive">Bolo Kit Kat</h3>
                         <p>Com uma montagem super simples, ele pode decorar qualquer tema de festa</p>
                         </div>
                    </div>
                    <div class="carousel-item">
                         <!--Mask color-->
                         <div class="view">
                         <img class="img-fluid mx-auto rounded" src="Imagens\Produtos\pinkskull.jpg" alt="Third slide" style="width: 70%; height:400px">
                         <div class="mask rgba-black-slight"></div>
                         </div>
                         <div class="carousel-caption mx-auto" style="background-color:rgba(0, 0, 0, .7); width:auto">
                         <h3 class="h3-responsive">Pink Skull</h3>
                         <p>Preferido das góticasinhas. Hail Satan!</p>
                         </div>
                    </div>
                    </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
               </div>
               <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ /.Carousel ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
               <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
          <br/>
               <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ e-Comerce ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
               <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
               <!-- Section: Products v.2 -->
               <div class="container">
                    <section class="text-center my-5">

                    <!-- Section heading -->
                    <h2 class="h1-responsive font-weight-bold text-center my-5">Nossos bestsellers</h2>
                    <!-- Section description -->
                    <p class="grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</p>

                    <!-- Grid row -->
                    <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                         <!-- Card -->
                         <div class="card card-cascade wider card-ecommerce">
                         <!-- Card image -->
                         <div class="view view-cascade overlay">
                              <img src="Imagens/Bestsellers/Frozen_best.jpg" class="card-img-top" alt="sample photo" width="10px" height="500px">
                              <a>
                              <div class="mask rgba-white-slight"></div>
                              </a>
                         </div>
                         <!-- Card image -->
                         <!-- Card content -->
                         <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="text-muted">
                              <h5>Aniversário</h5>
                              </a>
                              <h4 class="card-title">
                              <strong>
                              <a href="">Bolo Lerigou</a>
                              </strong>
                              </h4>
                              <!-- Description -->
                              <p class="card-text">Ainda não está de saco cheio da Frozen? Então este bolo é pra você!</p>
                              <!-- Card footer -->
                              <div class="card-footer px-1">
                                   <span class="float-none font-weight-bold" style="color:rgb(34, 34, 34)">
                                   <strong>R$ 50,00</strong>
                                   </span>
                              </div>
                         </div>
                         <!-- Card content -->
                         </div>
                         <!-- Card -->
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 mb-lg-0 mb-4">
                         <!-- Card -->
                         <div class="card card-cascade wider card-ecommerce">
                         <!-- Card image -->
                         <div class="view view-cascade overlay">
                              <img src="Imagens/Bestsellers/Goth_best.jpg" class="card-img-top" alt="sample photo" height="500px">
                              <a>
                              <div class="mask rgba-white-slight"></div>
                              </a>
                         </div>
                         <!-- Card image -->
                         <!-- Card content -->
                         <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="text-muted">
                              <h5>Casamento</h5>
                              </a>
                              <h4 class="card-title">
                              <strong>
                              <a href="">Bolo Gótico</a>
                              </strong>
                              </h4>
                              <!-- Description -->
                              <p class="card-text">Para os casais mais dark. *Nenhum animal foi sacrificado na confecção deste bolo*</p>
                              <!-- Card footer -->
                              <div class="card-footer px-1">
                                   <span class="float-none font-weight-bold" style="color:rgb(34, 34, 34)">
                                   <strong>R$ 750,00</strong>
                                   </span>
                              </div>
                         </div>
                         <!-- Card content -->
                         </div>
                         <!-- Card -->
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6">
                         <!-- Card -->
                         <div class="card card-cascade wider card-ecommerce">
                         <!-- Card image -->
                         <div class="view view-cascade overlay">
                              <img src="Imagens/Bestsellers/Torre_Cupcakes_best.JPG" class="card-img-top" alt="sample photo" height="500px">
                              <a>
                              <div class="mask rgba-white-slight"></div>
                              </a>
                         </div>
                         <!-- Card image -->
                         <!-- Card content -->
                         <div class="card-body card-body-cascade text-center">
                              <!-- Category & Title -->
                              <a href="" class="text-muted">
                              <h5>Festas</h5>
                              </a>
                              <h4 class="card-title">
                              <strong>
                              <a href="">Torre de Cupcakes</a>
                              </strong>
                              </h4>
                              <!-- Description -->
                              <p class="card-text">O preferido das gordinhas. Não precisa de ocasião especial ;)</p>
                              <!-- Card footer -->
                              <div class="card-footer px-1">
                                   <span class="float-none font-weight-bold" style="color:rgb(34, 34, 34)">
                                   <strong>R$ 150,00</strong>
                                   </span>
                              </div>
                         </div>
                         <!-- Card content -->
                         </div>
                         <!-- Card -->
                    </div>
                    <!-- Grid column -->

                    </div>
                    <br/>
                    <!-- Grid row -->
                              <a href="">
                                   <button type="button"class="btn btn-blue btn-lg btn-block"><span style="color:whitesmoke">Catálogo Completo</span></button>
                              </a>
                    </section>
                    <!-- Section: Products v.2 -->
               </div>
               <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ /.e-Comerce ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
               <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->

          <br/>
          <br/>

          <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ Footer ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
          <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
          <footer class="page-footer font-small unique-color-dark ">
               <div style="background-color: #c0264d; padding-top:10px; padding-bottom: 2px">
                    <div class="container">
                          <a href="Home.html">

                              <img class="rounded" src="Mr Cake Logo.png" width="auto" height="100" alt="Mr Cake Logo">
                              <h4 class="h4-responsive">Mr. Cake - Estamos aqui para adoçar o seu dia</h6>
                         </a>  
                    </div>
               </div>
               <!-- Footer Links -->
               <div class="container text-center text-md-left mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                         <!-- Content -->
                         <h6 class="text-uppercase font-weight-bold">Mr.Cake</h6>
                         <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto">
                         <p>Descrição da empresa: blá blá blá blá blá blá blá
                              blá blá blá blá blá blá blá 
                              blá blá blá blá blá blá blá 
                              blá blá blá blá blá blá blá.
                         </p>
                    </div>
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                         <!-- Links -->
                         <h6 class="text-uppercase font-weight-bold">Contact</h6>
                         <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto">
                         <p>
                         <i class="fa fa-home mr-3"></i> Rua Ficticia, 1924, São Paulo, SP</p>
                         <p>
                         <i class="fa fa-envelope mr-3"></i>marketing@mrcake.org.br</p>
                         <p>
                         <i class="fa fa-phone mr-3"></i> +55 11 5661-1665</p>
                         <p>
                         <i class="fa fa-print mr-3"></i> +55 11 5662-2665</p>
                    </div>
                    <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
               </div>
               <!-- Footer Links -->
               <!-- Copyright -->
               <div class="footer-copyright text-center py-3">© 2018 Copyright:
                    <a href=""> MrCake.ltda</a>
               </div>
               <!-- Copyright -->
          </footer>

          <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ /.Footer ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
          <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->


          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="node_modules\mdbootstrap\js\jquery-3.3.1.min.js"></script>
          <script src="node_modules\mdbootstrap\js\popper.min.js"></script>
          <script src="node_modules\mdbootstrap\js\bootstrap.js"></script>
          <script src="node_modules\mdbootstrap\js\bootstrap.min.js"></script>
          <script src="node_modules\mdbootstrap\js\mdb.js"></script>
          <script src="node_modules\mdbootstrap\js\mdb.min.js"></script>

     </body>
</html>