<?php
session_start();
require_once('../conexao.php');

if(isset($_SESSION['login'])) {
    header('Location: ../inicio.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
	<div class="container" id="container">
	<div class="form-container sign-in-container">
		<form action="../sql/valida_user.php" method="post">
			<h1>Acessar APE:</h1>
			<!-- <div class="social-container">
			</div> -->
			<!-- <span>or use your account</span> -->
			<input type="number" name="usuario" id="usuario" placeholder="RM" />
			<input type="password" name="senha" id="senha" placeholder="Senha" />
			<!-- <select>
					<option>Aluno</option>
					<option>ADM</option>
				</select><br><br> -->
			<!-- <a href="recsenha.php">Esqueci minha senha?</a><br><br> -->
			<button>Entrar</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Se cadastrar!</h1>
				<p>Faça parte do sistema APE, caso já tenha login é só clicar no botão entrar logo abaixo</p>
				<button class="ghost" id="signIn">Entrar</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Olá, aluno!</h1>
				<p>
					Insira seus dados pessoais e faça a recuperação do seu objeto, caso não seja cadastrado
					clique em cadastrar logo abaixo.
				</p>
				<a href="cadastro.php"><button class="ghost" id="signUp">Cadastrar</button></a>
			</div>
		</div>
	</div>
</div>
 <script src="/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script>
        M.AutoInit();
    </script>
</body>
</html>