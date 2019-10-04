<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . '/bd/conexao.php';

    echo "<script>alert('chegou aqui');</script>";


    if(isset ($_POST) && !empty($_POST))
    {
        $email = $_POST['email'];
        $nome = $_POST['txtNomeP'];
        $descricao = $_POST['txtDescricaoP'];
        $preco = $_POST['txtPrecoP'];
        $imagem = $_POST['txtFotoP'];
        $ingredientes = $_POST['txtIngredientesP'];
        $preco =  str_replace(",",".",$preco);


        //echo "<script>alert('$preco');</script>";
        /*
        echo "<script>alert('$nome');</script>";
        echo "<script>alert('$descricao');</script>";
        echo "<script>alert('$preco');</script>";
        echo "<script>alert('$imagem');</script>";
        */

        $sql = "SELECT id_origem FROM usuarios WHERE email = '$email'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        if($stmt)
        {
            if ($stmt->rowCount() == 0)
            {
                echo "<script>alert('Usuário ou senha inválida');</script>";
            }

        }

        foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $row)
        {
            $id_fornecedor = $row['id_origem'];
        }

        $sql = "SELECT COUNT(*) N FROM Produtos";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        if($stmt)
        {
            if ($stmt->rowCount() == 0)
            {
                echo "<script>alert('Erro Salvando imagem')</script>";
            }
        }

        echo "<script>alert('antes de \$imgfile')</script>";

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $file_name = 'bolo_' . $row['N'] . '.jpg';

        $imgfile = file_put_contents('/Imagens/Produtos/' . $file_name, $imagem);

        echo "<script>alert('depois de \$imgfile')</script>";

        $sql = "insert into produtos(id_fornecedor, nome, descricao, preco, imagem) values ($id_fornecedor, '$nome', '$descricao', '$preco', 'Produtos/$file_name')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        if($stmt)
        {
            echo "<script>alert('Produto inserido com sucesso!');</script>";

            $sql = "SELECT COUNT(id_produto)+1 N FROM Produtos";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            if($stmt){
                $id_produto = null;

                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                $id_produto = $row['N'];

                $ingredientes = explode(",", $ingredientes);

                foreach($ingredientes as $ingrediente)
                {
                    $sql = "INSERT INTO Ingredientes (id_produto, descricao)" .
                        "VALUES($id_produto, '$ingrediente')";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();

                    if($stmt){
                        echo "<script>alert('Ingredientes cadastrados com sucesso');</script>";
                    }
                }

                if($stmt) {
                    echo "<script>document.querySelector('#close_cria_produto').click();</script>";
                } else {
                    echo "<script>alert('ERRO INSERINDO INGREDIENTES')</script>";
                }

            } else {
                echo "<script>alert('ERRO INSERINDO INGREDIENTES');</script>";
            }
        }
        else
        {
            echo "<script>alert('Algo deu errado!');</script>";
        }
    }
    else
    {
        echo "<script>alert('ha');</script>";
    }

?>