<?php

require_once('../conexao.php');

$nome = $_REQUEST['N'];
$desc = $_REQUEST['D'];
$cat = $_REQUEST['CAT'];
$dt = $_REQUEST['DATA'];
$hr = $_REQUEST['H'];
$situacao = $_REQUEST['S'];
$imagem = $_REQUEST['A'];
$id_resp = $_REQUEST['R'];


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
            //sql... Insert into 'pessoa' (imagem) values ('$imagem');
            // echo "<br><img src='../paginas/arquivos/$arquivo'>";
	}
$sql = "INSERT INTO objeto (Id_objeto, Nome,Descricao,Categoria,Data_registro,Hoario_registro,Situacao,arquivo,Id_responsavel) VALUES ('NULL','$nome','$desc','$cat','$dt','$hr','$situacao','$imagem','$id_resp')";
$resultado = mysqli_query($conexao, $sql);
// echo $sql;
// exit();

if(mysqli_affected_rows($conexao) == 1){
    echo "Cadastrado com sucesso!";
}
else{
    echo "Erro no cadastro!!";
}


?>