<?php
  require_once 'config.php';

  $SQL = "SELECT * FROM ESTADO";
  $stmt = $conn->prepare($SQL);
  $stmt->execute();
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro da Municipio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../static/css/login.css">
	<link rel="stylesheet" type="text/css" href="../static/css/estilo.css">
</head>
<body>
	<?php include "cabecalho.php" ?>
	<div class ="caixa" id="cadastro_candidato">
		<a href="./estado.html">
			<img  class="imagem" src="../static/img/logo_c_cidade-estado.png" alt="logo">
		</a>
		<form name="cadastro_estado" action="cadastro_estado.php" method="post">
			<input type="hidden" name="id_estado">
      <label>Estado</label>
      <select class="" name="">
        <option>Selecione</option>
        <?php while($est = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
          <option value="<?php echo $est['ID_ESTADO'] ?>"><?php echo $est['NOME'] ?></option>
        <?php } ?>
      </select>
			<label for="municipio" class="l1">Municipio</label>
			<input required type="text" name="municipio" id="municipio">
			<button type="submit" class="bt" name="button">Cadastrar</button>
		</form>
		<br>
	</div>
	<?php include "rodape.php" ?>
</body>
</html>
