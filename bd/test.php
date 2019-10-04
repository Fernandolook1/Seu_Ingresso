<?php
    echo "
        <style>
            body {
                font-family: monospace;
                color: #7283a7;
            }
        </style>
    ";

    require_once "conexao.php";

    if(isset($conn)){
        echo "Hello World";
    } else {
        echo "No hello :c";
    }