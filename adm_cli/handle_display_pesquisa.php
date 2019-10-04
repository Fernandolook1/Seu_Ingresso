<!doctype html>
<html lang="pt">
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
<!--        <script src="js/jquery-1.7.2.min.js"></script>-->
        <script src="js/bootstrap.min.js"></script>

        <!--Font Awesome-->
        <!-- <link rel="stylesheet" href="font_awesome/css/all.css"> -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


        <link rel="stylesheet" href="../Estilo.css">


        <?php $email = $_POST['email']; ?>

        <script>
            $(document).ready(function(){

                $("#compraButton").click(function(){
                    $("#compraModal").modal();
                });
            });



            function updatePrecoTotal(id_produto, preco_produto){
                var input = "quantidade_produto_" + id_produto;
                var inputElem = document.getElementById(input);
                var output = document.getElementById('precoTotalDiv_produto_' + id_produto);

                if(inputElem.value == ''){
                    output.innerText = '0';
                    return;
                }

                var val = parseInt(inputElem.value);

                if(val < 0){
                    inputElem.value = 0;
                    return;
                }

                var preco = preco_produto;

                output.innerHTML =  (preco * val);
            }

            // function arrayRemoveById(arr, value) {
            //     return arr.filter(function(ele){
            //         return ele['id'] === value;
            //     });
            // }

            // var list_compras = [];
            // function addToList(id_produto){
            //
            //     var input = "quantidade_produto_" + id_produto;
            //     var quantidade = parseInt(document.getElementById(input).value);
            //
            //     for(var d of list_compras){
            //         if (d['id'] === id_produto){
            //             if(d['quantidade'] === 0){
            //                 list_compras = arrayRemoveById(list_compras, id_produto);
            //                 return;
            //             }
            //             d['quantidade'] = quantidade;
            //             return;
            //         }
            //     }
            //
            //     list_compras.push({'id': id_produto, 'quantidade': quantidade});
            // }

            function finalizaCompra(id_produto){
                var input = 'quantidade_produto_' + id_produto;
                var quantidade = parseInt(document.getElementById(input).value);

                $.ajax({
                    type: 'POST',
                    url: 'handle_registra_pedido.php',
                    data: {
                        'id_cliente': <?php echo $_POST['txtIdCliente'];?>,
                        'id_produto': id_produto,
                        'quantidade': quantidade
                    },
                    success: function(data){
                        alert(data);
                        location.href = 'index.php?email=<?php echo $_GET['email']; ?>';
                    },
                    fail: function(data){
                        alert('Me desculpe, algo deu errado :c');
                        location.href = 'index.php?email=<?php echo $_GET['email']; ?>';
                    }
                });
            }
        </script>
    </head>
    <body>
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
                        <a class="nav-link" href="index.php?email=<?php echo $_GET['email']; ?>">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php?pq=usuario">Logout</a>
                    </li>
                </ul>
                <!-- Links -->
                <form id="form_pesquisa" class="form-inline my-2 my-lg-0 ml-auto" action="handle_display_pesquisa.php?email=<?php echo $_GET['email'];?>" method="POST">
                    <!--        Mega gambiarra a seguir        -->
                    <input name="txtIdCliente"     type="number" style="display:none" value="<?php echo $_POST['txtIdCliente']; ?>">
                    <input name='txtEmailPesquisa' type="text"   style="display: none;"          value="<?php echo $email ?>">
                    <input name="txtPesquisaClienteProduto" id="txtPesquisaClienteProduto" class="form-control " type="search" placeholder="Pesquisar" aria-label="Pesquisar produtos">
                    <button class="btn btn-md my-2 my-sm-0 ml-3 btn-pink" type="submit">Ir</button>
                </form>
            </div>
            <!-- Collapsible content -->
        </nav>
        <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ /.Navbar ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
        <!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->

        <!-- Section: Products v.2 -->
        <div class="container">
            <section class="text-center my-5">

                <!-- Section heading -->
                <h2 class="h1-responsive font-weight-bold text-center my-5">Resultados para "<?php echo $_POST['txtPesquisaClienteProduto'];?>"</h2>
                <!-- Section description -->


                <!-- Grid row -->
                <div class="row">
        <?php

        require_once $_SERVER['DOCUMENT_ROOT'] . '/bd/conexao.php';



        $search_string = $_POST['txtPesquisaClienteProduto'];
        $email = $_POST['txtEmailPesquisa'];

        function pesquisaProdutos($search_string){
            $search_string = strtolower($search_string);

            $conn = getConnection();

            $sql = "SELECT id_produto, id_fornecedor, nome, descricao, preco FROM Produtos";

            $stmt = $conn->prepare($sql);
            $stmt->execute();

            $results = array();

            foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $produto){
                // Pesquisar o nome do produto contem a string de pesquisa
                if (strpos(strtolower($produto['nome']), $search_string) !== false ){
                    array_push($results, $produto);
                    continue;
                }

                // Para dividir as strings 'Bolo de chocolate' -> 'Bolo' 'de' 'chocolate'. logo procura cada um no no bd.
                $items = explode(' ', $search_string);

                $explode_encontrou = false;
                foreach($items as $item){
                    if(strpos(strtolower($produto['nome']), $item) !== false){
                        array_push($results, $produto);
                        // Ele encontrou então vai para o próximo produto.
                        $explode_encontrou = true;
                        break;
                    }
                }
                if($explode_encontrou){
                    continue;
                }
                foreach($items as $item){
                    if(strpos(strtolower($produto['descricao']), $item) !== false){
                        array_push($results, $produto);
                        // Ele encontrou então vai para o próximo produto.
                        break;
                    }
                }
            }

            return $results;
        }

        function getFornecedor($id){
            $id = intval($id);

            $conn = getConnection();

            $sql = "SELECT id_fornecedor, cnpj, razao_social, nome_fantasia, ddd, telefone FROM Fornecedores WHERE id_fornecedor = $id";

            $stmt = $conn->prepare($sql);
            $stmt->execute();

            if($stmt){
                $fornecedor = $stmt->fetch(PDO::FETCH_ASSOC);

                return $fornecedor;
            } else {
                echo "<script>alert('PESQUISANDO PRODUTOS');</script>";
                return false;
            }
        }

        $produtos = pesquisaProdutos($search_string);

        foreach($produtos as $produto) {
            $fornecedor = getFornecedor($produto['id_fornecedor']);
            ?>

            <!--            echo "{-->
            <!--                'nome':  '$produto[nome]',-->
            <!--                'descricao': '$produto[descricao]',-->
            <!--                'preco': $produto[preco],-->
            <!--                'cnpj_fornecedor': $fornecedor[cnpj],-->
            <!--                'nome_fantasia_fornecedor': $fornecedor[nome_fantasia],-->
            <!--                'telefone_fornecedor': $fornecedor[telefone],-->
            <!--                'razao_social_fornecedor': $fornecedor[razao_social]-->
            <!--            }";-->


            <!--    Items    -->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                <!-- Card -->
                <div class="card card-cascade wider card-ecommerce">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <!--           Só que neste nível aqui /adm_cli não existe Imagens.             -->
                        <img src="../Imagens/<?php echo $produto['imagem']; ?>" class="card-img-top"
                             alt="sample photo" width="10px" height="500px">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!-- Card image -->
                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">
                        <!-- Category & Title -->
                        <a href="" class="text-muted">
                            <h5></h5>
                        </a>
                        <h4 class="card-title">
                            <strong>
                                <a href=""><?php echo utf8_encode($produto['nome']); ?></a>
                            </strong>
                        </h4>
                        <!-- Description -->
                        <p class="card-text"><?php echo utf8_encode($produto['descricao']); ?></p>
                        <!-- Card footer -->
                        <div class="card-footer px-1">
                            <span class="float-none font-weight-bold" style="color:rgb(34, 34, 34)">
                                <strong>R$<?php echo $produto['preco']; ?></strong>
                            </span>
                        </div>

                        <div id="compraModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="compraModal" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="compraModalLabel" style="color:black;"><?php echo utf8_encode($produto['nome']);?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" style="color:black;">
                                        <label for="quantidade_produto">Quantidade: </label>
                                        <input id="quantidade_produto_<?php echo $produto['id_produto']; ?>" name="quantidade_produto" type="number" oninput="updatePrecoTotal(<?php echo $produto['id_produto'] . ', ' . $produto['preco']?>)" onclick="updatePrecoTotal(<?php echo $produto['id_produto'] . ', ' . $produto['preco']?>)" onchange="updatePrecoTotal(<?php echo $produto['id_produto'] . ', ' . $produto['preco']?>)">
                                        <div style="color: black;">R$
                                            <span style="color: black;" id="precoTotalDiv_produto_<?php echo $produto['id_produto']; ?>">
                                                0
                                            </span>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" onclick="finalizaCompra(<?php echo $produto['id_produto']; ?>)">Comprar</button>
                                        <!--<button type="button" class="btn btn-primary" onclick="addToList(--><?php //echo $produto['id_produto']; ?>//)">Comprar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card footer -->
                        <div class="card-footer px-1">
                            <span class="float-none font-weight-bold" style="color:rgb(34, 34, 34)">
                                <!-- Button trigger modal -->
                                <button id="compraButton" value="<?php echo $produto['id_produto'];?>" type="button" class="btn btn-md my-2 my-sm-0 ml-3 btn-pink" data-toggle="modal" data-target="#compraModal">
                                  Comprar
                                </button>
                            </span>
                        </div>
                    </div>
                    <!-- Card content -->
                </div>
                <!-- Card -->
            </div>
            <!-- Grid column -->
            <?php
                }
            ?>

            </div>
            <br/>
<!--            <!-- Grid row -->
<!--            <button onclick="finalizaCompra()" type="button" class="btn btn-blue btn-lg btn-block">-->
<!--                <span style="color:whitesmoke">Finalizar compra.</span>-->
<!--            </button>-->
<!--            </section>-->
<!--            <!-- Section: Products v.2 -->

        </div>

    </body>
    <?php
        include_once "footer.php";
    ?>
</html>