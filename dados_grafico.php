<?php
    // Seleciona todos os objetos com o campo status igual a Perdido
    $sql = "SELECT * FROM tobjeto WHERE situacao = 'perdido'";
    $resultado = mysqli_query($conexao, $sql);
    $perdido = mysqli_affected_rows($conexao);
    
    // Seleciona todos os objetos com o campo status diferente de Perdido
    $sql = "SELECT * FROM tbobjeto WHERE situacao != 'perdido'";
    $resultado = mysqli_query($conexao, $sql);
    $achado = mysqli_affected_rows($conexao);
?>