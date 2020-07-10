<?php

session_start();

require_once('../conexao.php');

$rm = $_REQUEST['usuario'];
$senha = $_REQUEST['senha'];

$sql = "SELECT * FROM tbusuario WHERE rm = $rm AND senha = $senha";
$resultado = mysqli_query($conexao, $sql);
$linhas = mysqli_affected_rows($conexao);

if($linhas >= 1){
    $_SESSION['login'] = $rm;
};

header('Location: ../paginas/login.php');

