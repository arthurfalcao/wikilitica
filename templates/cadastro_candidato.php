<?php

require_once 'config.php';

$nome = $_POST['nome'];
$datanasc = $_POST['data_nasc'];
$sexo = $_POST['sexo'];
$profissao = $_POST['profissao'];
$funcao = $_POST['funcao'];
$estado = $_POST['estado'];
$partido = $_POST['partido'];


$SQL = "INSERT INTO POLITICO (ID_POLITICO, NOME, DATA_NASC, SEXO, PROFISSAO, FUNCAO, ESTADO, PARTIDO)
        VALUES (DEFAULT, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($SQL);
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $datanasc);
$stmt->bindParam(3, $sexo);
$stmt->bindParam(4, $profissao);
$stmt->bindParam(5, $funcao);
$stmt->bindParam(6, $estado);
$stmt->bindParam(7, $partido);
$stmt->execute();

$SQL_id = "SELECT ID_POLITICO FROM POLITICO ORDER BY ID_POLITICO DESC LIMIT 1";
$stmt_id = $conn->prepare($SQL_id);
$stmt_id->execute();

$id = $stmt_id->fetch(PDO::FETCH_ASSOC);

$SQL_historico = "INSERT INTO HISTORICO (ID_POLITICO, PARTIDOS, CARGOS) VALUES (?, ?, ?)";
$stmt_his = $conn->prepare($SQL_historico);
$stmt_his->bindParam(1, $id['ID_POLITICO']);
$stmt_his->bindParam(2, $partido);
$stmt_his->bindParam(3, $funcao);
$stmt_his->execute();

echo "<script>alert('Candidato cadastrado com sucesso!');</script>";
echo "<script language=\"javascript\">window.location=\"candidato.php\";</script>";
?>
