<?php
	require_once('../conexao.php');
	$idUsuario = "";
	$rm = "";
	$nome = "";
	$sexo = "";
	$periodo = "";
	$curso = "";
	$email = "";
	$perguntasecreta = "";
	$respostasecreta = "";
	$senha = "";

	if($_POST) {
		$acionar = "";
		//Verificar se o parâmetro ACAO existe na URL
		if(isset($_REQUEST["acionar"])) {
			$acionar = $_REQUEST["acionar"];
			header("Location: obrigado.php");
		}

		//Recuperar todas informações dos campos da tabela
		$rm = $_REQUEST["registro"];
		$nome =$_REQUEST["nome"];
		$sexo = $_REQUEST["sexo"];
		$periodo = $_REQUEST["periodo"];
		$curso = $_REQUEST["curso"];
		$email = $_REQUEST["email"];
		$perguntasecreta = $_REQUEST["pergunta"];
		$respostasecreta = $_REQUEST["resposta"];
		$senha = $_REQUEST["senha"];
		
		if($acionar == "incluir") {
			$sqlstring = "INSERT INTO tbusuario (idUsuario, rm,nome,sexo,periodo,curso,email,perguntasecreta,respostasecreta,senha) VALUES (NULL,$rm,'$nome','$sexo','$periodo','$curso','$email','$perguntasecreta','$respostasecreta',$senha)";
                   // echo $sqlstring;
                   // exit();
			//Executar a instrução SQL dentro do BD
			$dados = mysqli_query($conexao, $sqlstring);
			//Verificar se a instrução executou corretamente no BD
			if(mysqli_affected_rows($conexao) > 0) {
				$msg = "Registro incluído com sucesso!";
			}
			else {
				$msg = "Problema na inclusão dos dados da Pessoa!";
			}
		}

	}
		?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<!----Validar Campos de Cadastro inicio ------------------------>
<script language="jscript" type="text/javascript">

	function fnValidar(menu)
	{
	if(document.frmCadastrar.registro.value=='') {
					alert('Campo RM obrigatorio!');
					document.frmCadastrar.registro.focus();
				}
				else if(document.frmCadastrar.nome.value=='') {
					alert('Campo Nome obrigatorio!');
					document.frmCadastrar.nome.focus();
				}
				else if(document.frmCadastrar.curso.value=='') {
					alert('Campo Curso obrigatorio!');
					
				}
				else if(document.frmCadastrar.periodo.value=='') {
					alert('Campo periodo obrigatorio!');
					
				}
				else if(document.frmCadastrar.pergunta.value=='') {
					alert('Campo pergunta obrigatorio!');
					
				}
				else if(document.frmCadastrar.sexo.value=='') {
					alert('Campo sexo obrigatorio!');
					
				}
				else if(document.frmCadastrar.email.value=='') {
					alert('Campo Email obrigatorio!');
					document.frmCadastrar.email.focus();
				}
				else if(document.frmCadastrar.resposta.value=='') {
					alert('Campo Resposta obrigatorio!');
					document.frmCadastrar.resposta.focus();
				}
				else if(document.frmCadastrar.senha.value=='') {
					alert('Campo Senha obrigatorio!');
					document.frmCadastrar.senha.focus();
				}
				else {
					document.frmCadastrar.action = 'cadastro.php?acionar='+menu;
					document.frmCadastrar.submit();
				}

				return false;
			}	
</script>

</head>
<body>

		<div class="container">
	<form name="frmCadastrar" method="post" action="">
			<input type="number" name="registro" id="registro" placeholder="rm" />
			<!-- <button onclick="fnValidarConsulta('consultar');">Consultar RM</button> -->
			<input type="text" name="nome" id="nome" placeholder="Nome"/>
			<label for="sexo">Sexo:</label>
            <select name="sexo" id="sexo">
            	<option value="">Escolha o sexo</option>
                <option  value="f">F</option>
                <option  value="m">M</option>
            </select>
            <label for="periodo">Periodo:</label>
            <select name="periodo" id="periodo">
            	<option value="">Escolha o horário</option>
                <option  value="in">Integrado</option>
                <option  value="nt">Noturno</option>
            </select>
			<label for="curso">Curso:</label>
            <select name="curso" id="curso">

            	<option value="">Escolha o curso</option>
                <option  value="adm">ADM</option>
                <option  value="nt">Nutrição</option>
                <option  value="ii">Informática para Internet</option>
            </select><br>
			<input type="email" name="email" id="email" placeholder="email" />
			<label for="pergunta">Pergunta Secreta:</label>
            <select name="pergunta" id="pergunta">
            	<option value="">Escolha a pergunta</option>
                <option value="Apelido de infância">Apelido de infância</option>
                <option value="Nome do primeiro pet">Nome do primeiro pet</option>
                <option value="Nome do melhor amigo">Nome do melhor amigo</option>
            </select><br>
			<input type="text" name="resposta" id="resposta" placeholder="resposta" />
			<input type="password" name="senha" id="senha" placeholder="senha" />
			<button onclick="fnValidar('incluir');">Cadastrar</button>
	</form>

</div>
</body>
</html>