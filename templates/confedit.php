<?php

require_once 'config.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$datanasc = $_POST['data_nasc'];
$sexo = $_POST['sexo'];
$profissao = $_POST['profissao'];
$funcao = $_POST['funcao'];
$estado = $_POST['estado'];
$partido = $_POST['partido'];

if (empty($sexo) || empty($funcao) || empty($estado) || empty($partido)) {
  echo "<script>alert('Digite os campos em branco'); history.back();</script>";
	exit;
}

$SQL_HIS = "INSERT INTO HISTORICO (ID_HISTORICO, ID_POLITICO, PARTIDOS, CARGOS) VALUES (DEFAULT, ?, ?, ?)";
$stmt_his = $conn->prepare($SQL_HIS);
$stmt_his->bindParam(1, $id);
$stmt_his->bindParam(2, $partido);
$stmt_his->bindParam(3, $funcao);
$stmt_his->execute();

$SQL = "UPDATE POLITICO
        INNER JOIN ESTADO ON ESTADO.ID_ESTADO = POLITICO.ESTADO
        INNER JOIN PARTIDO ON PARTIDO.ID_PARTIDO = POLITICO.PARTIDO
        SET POLITICO.NOME = ?, POLITICO.DATA_NASC = ?, POLITICO.SEXO = ?, POLITICO.PROFISSAO = ?, POLITICO.FUNCAO = ?, POLITICO.ESTADO = ?, POLITICO.PARTIDO = ?
        WHERE ID_POLITICO = ?";
$stmt = $conn->prepare($SQL);
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $datanasc);
$stmt->bindParam(3, $sexo);
$stmt->bindParam(4, $profissao);
$stmt->bindParam(5, $funcao);
$stmt->bindParam(6, $estado);
$stmt->bindParam(7, $partido);
$stmt->bindParam(8, $id);

try {
  $stmt->execute();
  echo "<script>alert('Candidato alterado com sucesso!');</script>";
  echo "<script language=\"javascript\">window.location=\"mostrar_lista.php\";</script>";
  //header("Location: cad_perfil.php?id=".$id);
} catch (PDOException $e) {
  echo "Erro ao alterar".$e->getMessage();
}


?>
