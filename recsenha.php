<!DOCTYPE html>
<html>
<head>
	<title>Recuperar senha</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/stylerecsenha.css">
</head>
<body>
	<div class="container">
	<form name="frmCadastrar" method="post" action="">
		<h1>Recuperar senha</h1><br>
			<input type="number" name="registro" id="registro" placeholder="rm" />
			<input type="text" name="nome" id="nome" placeholder="nome completo" />
			<label for="sexo">Sexo:</label>
            <select name="sexo" id="sexo">
            	<option value="">Escolha o sexo</option>
                <option  value="f">F</option>
                <option  value="m">M</option>
            </select><br>

            <label for="periodo">Periodo:</label>
            <select name="periodo" id="periodo">
            	<option value="">Escolha o horário</option>
                <option  value="in">Integrado</option>
                <option  value="nt">Noturno</option>
            </select><br>
            
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
			<button>Recuperar senha</button><br>
	</form>
	</div>
</body>
</html>