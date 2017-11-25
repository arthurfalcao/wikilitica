<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>WikiLítica</title>
	<link rel="stylesheet" type="text/css" href="../static/css/regioes.css">
	<link rel="stylesheet" type="text/css" href="../static/css/estilo.css">
</head>
<body>
	<?php include "cabecalho.php" ?>
	<div class="corpo">
		<div class="corpo" id="cabecalho">
			<h1>Estados e Munícipios</h1>
		</div>
		<div class="corpo" id="conteudo">
			<h2>Aqui vai ficar a lista de cidades e estados com dados como: candidatos daquela cidade, partidos presentes e etc.</h2>
			<p>Os estados ficaram organizados em uma lista de A-Z e as cidades em sublistas</p>
			<ul class="lista">
				<li><a href="#"> Estado A</a></li>
					<ul>
						<li><a href="#">Capital</a></li>
					</ul>
				<li><a href="#">Estado B</a></li>
					<ul>
						<li><a href="#">Capital</a></li>
					</ul>
				<li><a href="#">Estado C</a></li>
					<ul>
						<li><a href="#">Capital</a></li>
					</ul>
			</ul>

		</div>
	</div>
	<?php include "rodape.php" ?>
</body>
</html>
