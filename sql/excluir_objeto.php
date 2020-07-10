<?php

require_once('../conexao.php');

$value = $_REQUEST['ITEM'];

$sql = "DELETE FROM objeto WHERE Id_objeto='$value'";
$resultado = mysqli_query($conexao,$sql);

if(mysqli_affected_rows($conexao) == 1){
    echo"Item do ID $value excluido com sucesso!";
}
else{
    echo"Não foi possivel excluir o item de ID $value";
}

?>