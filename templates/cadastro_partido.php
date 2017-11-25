<!DOCTYPE html>
<html>
<head>
	<title>cadastro_partido</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../static/css/login.css">
	<link rel="stylesheet" type="text/css" href="../static/css/estilo.css">
</head>
<body>
	<?php include "cabecalho.php" ?>

	<div class ="caixa" id="cadastro_partido">
			<a href="../index.html">
				<img  class="imagem"  src="../static/img/logo c_partido.png" alt="logo" height="20px" width="80px">
			</a>
		<form name="cadastro" action="">
			<label class="l1">Descrição</label>
			<input type="text" name="Nome">
			<label class="l1">Sígla</label>
			<input type="text" name="Sigla">
			<label class="l1">Presidente</label>
			<input type="text" name="Presidente">
			<label class="l1">Data de Fundação</label>
			<input type="text" name="nome"><br>
			<label class="l1">Espectro</label>
			<select class="l1" name="Partidos">
					<option selected="selected">Selecione</option>
					<option value="direita">Direita</option>
					<option value="esquerda">Esquerda</option>
					<option value="neutro">Neutro</option>
			</select><br><br>
			<br>
			<br>
			<input type="submit" class="bt" value="Cadastrar">
			<input type="reset" class="bt" value="Cancelar">
		</form>
		<br>
	</div>
	<?php include "rodape.php" ?>
</body>
</html>
