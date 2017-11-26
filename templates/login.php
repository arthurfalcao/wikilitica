<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Login - WikiLítica</title>
	<link rel="stylesheet" type="text/css" href="../static/css/login.css">
  <link rel="stylesheet" type="text/css" href="../static/css/estilo.css">
</head>
<body>
  <?php include "cabecalho.php" ?>
	<div class ="caixa" id="login">
		<a href="./login.html">
			<img  class="imagemCaixa"  src="../static/img/login.png" alt="logo" height="20px" width="80px">
		</a>
		<form class = "cadastroEstilo" name="login" action="confirma_login.php" method="post">
			<label id="l1">Email:</label><br>
			<input type="text" name="nEmail" id="iEmail"><br><br>
			<label id="l1">Senha:</label><br>
			<input type="password" name="nSenha" id="iSenha"><br><br>
			<label><input style="width: 10px;" type="radio" value="Lembrar Senha"> Lembrar Senha</label>
			<br><br>
			<button class="bt" type="submit" name="button">Entrar</button>
		</form>
		<br>
	</div>
	<?php include "rodape.php" ?>
</body>
</html>
