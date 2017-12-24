<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Buscar</title>
	<link rel="stylesheet" type="text/css" href="../static/css/login.css">
	<link rel="stylesheet" type="text/css" href="../static/css/estilo.css">
</head>
<body>
  <?php
    require_once 'config.php';

    $SQL = "SELECT * FROM ESTADO";
    $stmt = $conn->prepare($SQL);
    $stmt->execute();

    if (isset($_POST['button'])) {
    $nomeCandidato = $_POST['nome_candidato'];
    $idEstado = $_POST['estado'];
    $funcao = $_POST['funcao'];

    $SQL_PTD = "SELECT
    POLITICO.ID_POLITICO,
    POLITICO.NOME AS NOME,
    POLITICO.FUNCAO,
    ESTADO.NOME AS ESTADO

    FROM POLITICO

    INNER JOIN ESTADO
    ON ESTADO.ID_ESTADO = POLITICO.ESTADO

    WHERE POLITICO.NOME LIKE ? AND POLITICO.ESTADO = ? AND POLITICO.FUNCAO = ?
    ";

    $stmt_can = $conn->prepare($SQL_PTD);
    $params = array("$nomeCandidato%", $idEstado, $funcao);
    $stmt_can->execute($params);
    }
    include "cabecalho.php"
     ?>
	<div class ="caixa" id="cadastro_candidato">
		<a href="./mostrar_lista.php">
			<img src="../static/img/buscar.png" alt="buscar" class="img-buscar">
		</a>
			<form class="cadastroEstilo" method="post" action="<?php $PHP_SELF; ?>">
				<label for="nome_candidato" class="l1">Nome do Candidato</label>
				<input id ="nome_candidato" type="text" name="nome_candidato"><br>
				<label class="l1">Estado de Atuação</label>
				<select required class="l1" name="estado">
        	<option>Selecione</option>
        	<?php while($est = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
          <option value="<?php echo $est['ID_ESTADO'] ?>"><?php echo utf8_encode($est['NOME']) ?></option>
       		<?php } ?>
      	</select><br><br>
      	<label for="funcao" class="l1">Função</label>
				<select required class="l1" name="funcao" id="funcao">
					<option value="" selected="selected">Selecione</option>
          <option>Vereador</option>
					<option>Prefeito</option>
					<option>D.Estadual</option>
					<option>D.Federal</option>
					<option>Governador</option>
					<option>Senador</option>
					<option>Presidente</option>
			 	</select><br><br>
				<button type="submit" class="btn" name="button">Buscar</button>
			</form>
			<br>
	</div>
  <?php if (isset($_POST['button'])) { ?>
    <table id="tab1">
      <tr>
        <th>Candidato</th>
        <th>Estado</th>
        <th>Função</th>
      </tr>
      <?php while($canditados = $stmt_can->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
          <td><?php echo $canditados['NOME'] ?></td>
          <td><?php echo utf8_encode($canditados['ESTADO']) ?></td>
          <td><?php echo $canditados['FUNCAO'] ?></td>
          <td><button class="btn" onclick="window.location.href='/wikilitica/templates/cad_perfil.php?id=<?php echo $canditados['ID_POLITICO'] ?>'">Perfil</button></td>
        </tr>
      <?php } ?>
    </table>
  <?php } ?>
	<?php include "rodape.php" ?>
</body>
</html>
