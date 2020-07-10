<?php

//essa é pasta que envia os dados para o banco de dados inclusive o nome da imagem pro banco e o arquivo de imagem pra pasta




require_once('../conexao.php');

$Id_objeto = "";
$Nome  = "";
$Descricao = ""; 
$Categoria = ""; 
$Data_registro = "";
$Hoario_registro = ""; 
$Situacao = ""; 
$arquivo = ""; 
$Id_responsavel = "";



$Nome = $_REQUEST['nome'];
$Descricao = $_REQUEST['descricao'];
$Categoria = $_REQUEST['categoria'];
$Data_registro = $_REQUEST['data'];
$Hoario_registro = $_REQUEST['horario'];
$Situacao = $_REQUEST['situacao'];
$arquivo = $_REQUEST['anexo'];
$Id_responsavel = $_REQUEST['responsavel'];


if (isset($_POST['nome'])) {
		$imagem = $_FILES['imagem'];            
            $nomeOriginal = $imagem['name'];
            $divisao = explode(".", $nomeOriginal);
            // andre.png andre.basso.png andre.luis.basso.png
            //capturar a extensão da imagem
            $ext = array_pop($divisao);
            //png jpg jpeg gif
            $arquivo = uniqid().".".$ext;
            //475384963067.png
            //caminho que irá salvar
            $caminho = "../paginas/arquivos/".$arquivo;
            //mover para a pasta
            move_uploaded_file($imagem['tmp_name'],$caminho);       
	}
$sql = "INSERT INTO objeto (Id_objeto, Nome,Descricao,Categoria,Data_registro,Hoario_registro,Situacao,arquivo,Id_responsavel) VALUES ('NULL','$Nome','$Descricao','$Categoria','$Data_registro','$Hoario_registro','$Situacao','$arquivo','$Id_responsavel')";

	
$resultado = mysqli_query($conexao, $sql);

if(mysqli_affected_rows($conexao) == 1){
    // echo "Cadastrado com sucesso!";
    header('Location: ../adm.php');
}
else{
    echo "Erro no cadastro!!";
}

?>