<?php
require_once 'config.php';

$nomeCandidato = $_POST['nome_candidato'];
$idEstado = $_POST['estado'];

$SQL_PTD = "SELECT
POLITICO.NOME AS NOME,
POLITICO.DATA_NASC,
POLITICO.SEXO,
POLITICO.PROFISSAO,
POLITICO.FUNCAO,
PARTIDO.NOME AS PARTIDO,
ESTADO.NOME AS ESTADO

FROM POLITICO

INNER JOIN PARTIDO
ON PARTIDO.ID_PARTIDO = POLITICO.PARTIDO
INNER JOIN ESTADO
ON ESTADO.ID_ESTADO = POLITICO.ESTADO

WHERE POLITICO.NOME LIKE ? AND POLITICO.ESTADO = ?
";

$stmt = $conn->prepare($SQL_PTD);
$params = array("%$nomeCandidato%", $idEstado);
$stmt->execute($params);
$canditados = $stmt->fetch(PDO::FETCH_ASSOC);

 ?>

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
	<div class="corpo" id="cabecalho">
			<img    src="../static/img/logo_candidato.png" alt="logo" height="80px" width="270px">
		</div>
	<div class="corpo" id="conteudo">
	<label>Nome: <?php echo $canditados['NOME'] ?></label><br>
	<label>Idade: <?php echo $canditados['DATA_NASC'] ?></label><br>
	<label>Sexo: <?php echo $canditados['SEXO'] ?></label><br>
	<label>Profissão: <?php echo $canditados['PROFISSAO'] ?></label><br>
	<label>Função: <?php echo $canditados['FUNCAO'] ?></label><br>
	<label>Partido: <?php echo $canditados['PARTIDO'] ?></label><br>
	<label>Estado: <?php echo $canditados['ESTADO'] ?></label><br>

	<?php include "rodape.php" ?>
</body>
</html>
