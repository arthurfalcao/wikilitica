 <?php session_start();
  require_once "config.php";

  if (!isLogado()) {
    echo "<script>alert('Entre para acessar.');</script>";
    echo "<script language=\"javascript\">window.location=\"login.php\";</script>";
  }

  // pega o ID da URL
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

//Valida a variavel da URL
if (empty($id)){
  echo "ID para alteração não definido";
  exit;
}

$SQL = "SELECT * FROM politico WHERE ID_POLITICO = ?";
$SQL = $conn->prepare($SQL);
$SQL->bindParam(1, $id);

$SQL->execute();

$sql_result_id = $SQL->fetch(PDO::FETCH_ASSOC);

  //select do estado e partido
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
		<form class="cadastroEstilo" name="editar" action="confedit.php" method="post">
			<label>Editando Candidato: <?php echo $sql_result_id['NOME']; ?></label><br>
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<label for="nome" class="l1">Nome</label><br>
			<input required type="text" name="nome" id="nome" value="<?php echo $sql_result_id['NOME']; ?>"><br>
			<label for="sexo" class="l1">Sexo</label>
			<select required class="l1" name="sexo" id="sexo">
				<option><?php echo $sql_result_id['SEXO']; ?></option>
				<option>Masculino</option>
				<option>Feminino</option>
			</select><br><br>
			<label for="data_nasc" class="l1">Data de Nascimento</label>
			<input required type="date" name="data_nasc" id="data_nasc" value="<?php echo $sql_result_id['DATA_NASC']; ?>">
			<label for="profissao" class="l1">Profissão</label><br>
			<input required type="text" name="profissao" id="profissao" value="<?php echo $sql_result_id['PROFISSAO']; ?>"><br>
			<label for="funcao" class="l1">Função</label>
			<select required class="l1" name="funcao" id="funcao" value="">
				<option><?php echo $sql_result_id['FUNCAO']; ?></option>
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
        <option value="<?php echo $sql_result_id['ESTADO']; ?>">Selecione</option>
        <?php while($est = $stmt_est->fetch(PDO::FETCH_ASSOC)) { ?>
        <option value="<?php echo $est['ID_ESTADO'] ?>"><?php echo utf8_encode($est['NOME']) ?></option>
        <?php } ?>
      </select><br><br>
			<label for="partido" class="l1">Partido atual</label>
			<select required class="l1" name="partido" id="partido">
				<option value="<?php echo $sql_result_id['PARTIDO']; ?>">Selecione</option>
				<?php while($ptd = $stmt_ptd->fetch(PDO::FETCH_ASSOC)) { ?>
        <option value="<?php echo $ptd['ID_PARTIDO'] ?>"><?php echo $ptd['SIGLA'] ?></option>
        <?php } ?>
		  </select><br><br>
      <label for="propostas" class="l1">Ideias e Propostas</label>
		  <textarea rows="5" cols="25" maxlength="500" id="propostas" name="propostas" class="l1" style="width: 100%;"></textarea>
			<br>
			<button type="submit" name="button" class="btn">Editar</button>
		</form>
		<br>
	</div>
	<?php include "rodape.php" ?>
</body>
</html>
