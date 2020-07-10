<?php

require_once('../conexao.php');

$value = $_REQUEST['ID'];

$sql = "UPDATE objeto set Situacao = 'Retirado' WHERE Id_objeto='$value'";
$resultado = mysqli_query($conexao,$sql);

if(mysqli_affected_rows($conexao) == 1){
	alert('O item foi retirado com sucesso');
    // echo"Item do ID $value excluido com sucesso!";
}
else{
    echo"Não foi possivel excluir o item de ID $value";
}

?>