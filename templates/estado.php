<?php
require_once 'config.php';
session_start();
if (!isLogado()) {
	echo "<script>alert('Entre para acessar.');</script>";
	echo "<script language=\"javascript\">window.location=\"login.php\";</script>";
}
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro da Estado</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../static/css/login.css">
	<link rel="stylesheet" type="text/css" href="../static/css/estilo.css">
</head>
<body>
	<?php include "cabecalho.php" ?>
	<div class ="caixa" id="cadastro_candidato">
		<a href="./estado.php">
			<img  class="imagemCaixa" src="../static/img/logo_c_cidade-estado.png" alt="logo">
		</a>
		<form class = "cadastroEstilo" name="cadastro_estado" action="cadastro_estado.php" method="post">
			<input type="hidden" name="id_estado">
			<label for="estado" class="l1">Estado</label><br>
			<input required type="text" name="estado" id="estado"><br>
			<label for="municipio" class="l1">Capital</label>
			<input required type="text" name="municipio" id="municipio">
			<button type="submit" class="bt" name="button">Cadastrar</button>
		</form>
		<br>
	</div>
	<?php include "rodape.php" ?>
</body>
</html>
