<?php
require_once 'config.php';

session_start();
if (isLogado()) {
	header('Location: ../index.php');
}
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="../static/css/login.css">
	<link rel="stylesheet" type="text/css" href="../static/css/estilo.css">
</head>
<body>
	<?php include "cabecalho.php" ?>
	<div class ="caixa" id="cadastro">
		<a href="./cadastro.php">
			<img  class="imagemCaixa"  src="../static/img/registro.png" alt="logo">
		</a>
		<form class = "cadastroEstilo" name="cadastro" action="confcadastro.php" method="post">
			<label class="l1" for="iEmail">Email</label>
			<input required type="email" name="nEmail" id="iEmail"><br>
			<label class="l1" for="iSenha">Senha</label>
			<input required type="password" name="nSenha" id="iSenha"><br>
			<label class="l1" for="iCPF">CPF</label>
			<input required type="text" name="nCPF" id="iCPF"><br>
			<label class="l1" for="iNome">Nome Completo</label>
			<input required type="text" name="nNome" id="iNome"><br>
			<label class="l1" for="iTelefone">Telefone</label>
			<input required type="text" name="nTelefone" id="iTelefone"><br>
			<label class="l1">Data de Nascimento</label>
			<input required style="width: 40%" type="date" name="nData" id="iData"><br>
			<label class="l1">Sexo</label>
			<select class"l1" name="nSexo" id="iSexo">
						<option selected="selected">Selecione</option>
						<option value="masculino">Masculino</option>
						<option value="feminino">Feminino</option>
			</select><br><br>
			<label class="l1" for="iEnd">Endereço</label>
			<input required type="text" name="nEnd" id="iEnd"><br>
			<label class="l1" for="iEst">Estado</label><br>
			<input required type="text" name="nEst" id="iEst"><br>
			<label class="l1" for="iCid">Cidade</label><br>
			<input required type="text" name="nCid" id="iCid"><br>
			<br>
			<button class="bt" type="submit" name="button">Cadastrar</button>
		</form>
		<br>
	</div>
	<?php include "rodape.php" ?>
</body>
</html>
