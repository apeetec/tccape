<?php
require_once('../conexao.php');

$idsolicitacao = "";
$datasolicitacao = "";
$horaconfirmacao = "";
$tipo = "";
$descricao = "";
$nomeobjeto = "";
$codusuariosolicitacao = "";


$datasolicitacao = $_REQUEST['data'];
$horasolicitacao = $_REQUEST['horario'];
$tipo = $_REQUEST['categoria'];
$nomeobjeto = $_REQUEST['nomeobjeto'];
$codusuariosolicitacao = $_REQUEST['codusuariosolicitacao'];
$descricao = $_REQUEST['descicaoobjeto'];

$sql = "INSERT INTO tbsolicitacao (idsolicitacao, datasolicitacao,horasolicitacao, tipo,descricao,nomeobjeto, codusuariosolicitacao ) VALUES (NULL,'$datasolicitacao','$horasolicitacao','$tipo','$descricao','$nomeobjeto','$codusuariosolicitacao')";

 // echo $sql;
 // exit();

$resultado = mysqli_query($conexao, $sql);

if(mysqli_affected_rows($conexao) == 1){
    // echo "Cadastrado com sucesso!";
    header('Location: ../inicio.php');
}
else{
    echo "Erro no cadastro!!";
}

?>