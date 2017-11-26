<?php
  require_once 'config.php';

  $SQL = "SELECT * FROM ESTADO";
  $stmt = $conn->prepare($SQL);
  $stmt->execute();
 ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Buscar</title>
	<link rel="stylesheet" type="text/css" href="../static/css/login.css">
	<link rel="stylesheet" type="text/css" href="../static/css/estilo.css">
</head>
<body>
	<?php include "cabecalho.php" ?>
	<div class ="caixa" id="cadastro_candidato">
		<a href="./estado.html">
		<img  class="imagemCaixa" src="../static/img/buscar.png" alt="logo">
		</a>
			<form class="cadastroEstilo" >
				<label for="nome_candidato" class="l1">Nome do Candidato</label>
				<input id ="nome_candidato" type="text" name="nome_candidato"><br>
				<label class="l1">Estado de Atuação</label>
				<select required class="l1" name="estado">
        			<option>Selecione</option>
        				<?php while($est = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
          			<option value="<?php echo $est['ID_ESTADO'] ?>"><?php echo $est['NOME'] ?></option>
       					<?php } ?>
      			</select><br><br>
      			<label for="funcao" class="l1">Função</label>
					<select required class="l1" name="funcao" id="funcao">
						<option value="selecione" selected="selected">Selecione</option>
            			<option>Vereador</option>
						<option>Prefeito</option>
						<option>D.Estadual</option>
						<option>D.Federal</option>
						<option>Governador</option>
						<option>Senador</option>
						<option>Presidente</option>
				 	</select><br><br>
				 <button type="submit" class="bt" name="button">Cadastrar</button>
			</form>
			<br>
	</div>
	<?php include "rodape.php" ?>
</body>
</html>
