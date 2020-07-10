<!-- <?php

// $servidor = "localhost";
// $db = "ape";
// $user = "root";
// $senha = "";

// $conexao = mysqli_connect($servidor, $user, $senha, $db);


?> -->
<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $banco = "apedois";

    //Criar a conexão com o BD
    $conexao = mysqli_connect($server, $user, $pass, $banco);
    if(!$conexao) {
        die("Problema com a conexão com o Banco de Dados");
    }
    else {
        //Abrir o banco de dados
        mysqli_select_db($conexao, $banco);
    }
?>