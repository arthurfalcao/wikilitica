<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>WikiLítica</title>
	<link rel="stylesheet" type="text/css" href="../static/css/sobre.css">
	<link rel="stylesheet" type="text/css" href="../static/css/estilo.css">
</head>
<body>
	<?php include "cabecalho.php" ?>

		<div class="corpo" id="conteudo">
			<div class="corpo" id="cabecalho">
			<img    src="../static/img/logo_sobre.png" alt="logo" height="80px" width="270px">
		</div>
			<p>
				Área destinada ao LEIA-ME
			</p>

			<h2>Integrantes:</h2>
			<ul type="square" id="contatos">
				<li>Joab Leite, leitejoab@gmail.com</li>
				<li>Franklin Soares, franklinmelo18@gmail.com</li>
				<li>Rodrigo Camelo, rodrigocamelosilva@icloud.com</li>
				<li>Arthur Falcão, arthurfalcao77@gmail.com </li>
			</ul>
			<h2>Mapa do Site:</h2>
			<ul type="square">
				<li><a href="../index.php" class="link1"> Inicio</a></li>
				<li><a href="./mostrar_lista.php" class="link1"> Buscar</a>
				<li>Contribuir
					<ul type="circle">
						<li><a href="candidato.php" class="link1"> Candidatos</a></li>
						<li><a href="partido.php" class="link1"> Partidos</a></li>
						<li><a href="estado.php" class="link1"> Estados </a></li>
						<li><a href="municipio.php" class="link1"> Municípios</a></li>
					</ul>s
				</li>
				<li><a href="./sobre.html " class="link1"> Sobre</a> </li><br><br>
			</ul>
		</div>
	</div>
	<?php include "rodape.php" ?>
</body>
</html>
