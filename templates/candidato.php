<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro do Candidato</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../static/css/login.css">
	<link rel="stylesheet" type="text/css" href="../static/css/estilo.css">
</head>
<body>
	<?php include "cabecalho.php" ?>
	<div class ="caixa" id="cadastro_candidato">
		<a href="./cadastro_candidato.html">
			<img  class="imagem" src="../static/img/logo c_politco.png" alt="logo">
		</a>
		<form name="cadastro" action="cadasto_politico.php" method="post">
			<label class="l1">Nome</label><br>
			<input type="text" name="nome"><br>
			<label class="l1">Sexo</label>
					<select class="l1" name="sexo">
						<option value="selecione" selected="selected">Selecione</option>
						<option value="masculino">Masculino</option>
						<option value="feminino">Feminino</option>
					</select><br><br>
			<label class="l1">Profissão</label><br>
			<input type="text" name="profissao"><br>
			<label class="l1">Função</label>
					<select class="l1" name="funcao">
						<option value="selecione" selected="selected">Selecione</option>
						
				 	</select><br><br>
			<!--Deverá ter condição para definir os dados que serão exibidos Cidade ou Estado dependendo da Função-->
			<label class="l1">Cidade ou Estado de Atuação</label><br>
			<input type="text" name="cidade" id="cidade"><br>
			<label class="l1">Partido atual</label>
					<select class="l1" name="partido">
						<option value="selecione" selected="selected">Selecione</option>
						<option value="PT">PT</option>
						<option value="PSDB">PSDB</option>
						<option value="REDE">REDE</option>
				  </select><br><br>
			<br>
			<br>
			<button type="submit" name="button" class="bt">Cadastrar</button>
		</form>
		<br>
	</div>
	<?php include "rodape.php" ?>
</body>
</html>
