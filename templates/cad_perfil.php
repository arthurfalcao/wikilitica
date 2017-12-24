<?php session_start();
require_once 'config.php';

$idPolitico = $_GET['id'];

$SQL_PTD = "SELECT
POLITICO.ID_POLITICO,
POLITICO.NOME AS NOME,
POLITICO.DATA_NASC,
POLITICO.SEXO,
POLITICO.PROFISSAO,
POLITICO.FUNCAO,
POLITICO.PROPOSTAS,
PARTIDO.SIGLA AS PARTIDO,
ESTADO.NOME AS ESTADO

FROM POLITICO

INNER JOIN PARTIDO
ON PARTIDO.ID_PARTIDO = POLITICO.PARTIDO
INNER JOIN ESTADO
ON ESTADO.ID_ESTADO = POLITICO.ESTADO

WHERE POLITICO.ID_POLITICO = ?
";

$stmt = $conn->prepare($SQL_PTD);
$stmt->bindParam(1, $idPolitico);
$stmt->execute();

$canditados = $stmt->fetch(PDO::FETCH_ASSOC);
// Função mostrar idade
list($dia) = explode('-', $canditados['DATA_NASC']);
$hoje = 2017;
$nascimento = $dia;
$idade = $hoje - $nascimento;

$SQL= "SELECT POLITICO.NOME, POLITICO.FUNCAO, PARTIDO.SIGLA AS PARTIDOS, ESTADO.NOME AS ESTADO, HISTORICO.CARGOS, HISTORICO.PARTIDOS AS PARTIDO, HISTORICO.ID_POLITICO
       FROM (((POLITICO
       INNER JOIN PARTIDO ON PARTIDO.ID_PARTIDO = POLITICO.PARTIDO)
       INNER JOIN ESTADO ON ESTADO.ID_ESTADO = POLITICO.ESTADO)
       INNER JOIN HISTORICO ON HISTORICO.ID_POLITICO = POLITICO.ID_POLITICO)
       WHERE POLITICO.ID_POLITICO = ?
       ";
$stmt_2 = $conn->prepare($SQL);
$stmt_2->bindParam(1, $idPolitico);
$stmt_2->execute();

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
			<img src="../static/img/logo_candidato.png" alt="logo" height="80px" width="270px">
	</div>
	<div class="corpo" id="conteudo">
  	<label class="l2">Nome: <?php echo $canditados['NOME'] ?></label><br>
  	<label class="l2">Idade: <?php echo $idade ?> anos</label><br>
  	<label class="l2">Sexo: <?php echo $canditados['SEXO'] ?></label><br>
  	<label class="l2">Profissão: <?php echo $canditados['PROFISSAO'] ?></label><br>
  	<label class="l2">Função: <?php echo $canditados['FUNCAO'] ?></label><br>
  	<label class="l2">Partido: <?php echo $canditados['PARTIDO'] ?></label><br>
  	<label class="l2">Estado: <?php echo $canditados['ESTADO'] ?></label><br>

    <?php
      while ($historico = $stmt_2->fetch(PDO::FETCH_ASSOC)) {
        if ($historico['CARGOS'] <> $canditados['FUNCAO']) {
          ?>
          <label class="l2">Histórico de Cargos: <?php echo $historico['CARGOS']; ?></label><br>
          <?php
        }
        if ($historico['PARTIDO'] <> $canditados['PARTIDO']) {
          ?>
          <label class="l2">Histórico de Partidos: <?php echo $historico['PARTIDO']; ?></label><br>
          <?php
        }
      } ?>

    <label class="l2">Ideais e Propostas: <?php echo $canditados['PROPOSTAS'] ?> </label><br>

    <button type="button" class="btn" onclick="window.location.href='/wikilitica/templates/apagar.php?id=<?php echo $canditados['ID_POLITICO'] ?>'">Apagar</button>
    <button type="button" class="btn" onclick="window.location.href='/wikilitica/templates/editar.php?id=<?php echo $canditados['ID_POLITICO'] ?>'">Editar</button>
  </div>
<?php include "rodape.php" ?>
</body>
</html>
