<?php   session_start();
  require_once 'config.php';

  if (!isLogado()) {
    echo "<script>alert('Entre para acessar.');</script>";
    echo "<script language=\"javascript\">window.location=\"login.php\";</script>";
  }

  $SQL_PTD = "SELECT * FROM PARTIDO";
  $SQL_EST = "SELECT * FROM ESTADO";

  $stmt_ptd = $conn->prepare($SQL_PTD);
  $stmt_est = $conn->prepare($SQL_EST);

  $stmt_ptd->execute();
  $stmt_est->execute();

 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro do Candidato</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../static/css/login.css">
	<link rel="stylesheet" type="text/css" href="../static/css/estilo.css">
</head>
<body>
	<?php include "cabecalho.php" ?>
	<div class ="caixa" id="cadastro_candidato">
		<a href="./cadastro_candidato.html">
			<img  class="imagemCaixa" src="../static/img/logo c_politco.png" alt="logo">
		</a>

		<form class="cadastroEstilo" name="cadastro" action="cadastro_candidato.php" method="post">
			<label for="nome" class="l1">Nome</label><br>
			<input required type="text" name="nome" id="nome"><br>

			<label for="sexo" class="l1">Sexo</label>
			<select required class="l1" name="sexo" id="sexo">
				<option value="">Selecione</option>
				<option value="masculino">Masculino</option>
				<option value="feminino">Feminino</option>
			</select><br><br>

			<label for="data_nasc" class="l1">Data de Nascimento</label>
			<input required type="date" name="data_nasc" id="data_nasc">

			<label for="profissao" class="l1">Profissão</label><br>
			<input required type="text" name="profissao" id="profissao"><br>

			<label for="funcao" class="l1">Função</label>
			<select required class="l1" name="funcao" id="funcao">
				<option value="">Selecione</option>
        <option>Vereador</option>
				<option>Prefeito</option>
				<option>D.Estadual</option>
				<option>D.Federal</option>
				<option>Governador</option>
				<option>Senador</option>
				<option>Presidente</option>
		 	</select><br><br>

			<!--Deverá ter condição para definir os dados que serão exibidos Cidade ou Estado dependendo da Função-->
			<label for="estado" class="l1">Estado</label>
			<select required class="l1" name="estado" id="estado">
        <option>Selecione</option>
        <?php while($est = $stmt_est->fetch(PDO::FETCH_ASSOC)) { ?>
          <option value="<?php echo $est['ID_ESTADO'] ?>"><?php echo utf8_encode($est['NOME']) ?></option>
        <?php } ?>
      </select><br><br>

			<label for="partido" class="l1">Partido atual</label>
			<select required class="l1" name="partido" id="partido">
				<option value="selecione" selected="selected">Selecione</option>
				<?php while($ptd = $stmt_ptd->fetch(PDO::FETCH_ASSOC)) { ?>
          <option value="<?php echo $ptd['ID_PARTIDO'] ?>"><?php echo $ptd['SIGLA'] ?></option>
        <?php } ?>
		  </select><br><br>

			<br>
			<label for="propostas" class="l1">Ideias e Propostas</label>
		  <textarea rows="10" cols="40" maxlength="500" id="propostas" name="propostas"></textarea>

			<button type="submit" name="button" class="btn">Cadastrar</button>
		</form>
		<br>
	</div>
	<?php include "rodape.php" ?>
</body>
</html>
