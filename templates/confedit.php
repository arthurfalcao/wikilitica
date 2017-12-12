<?php

require_once 'config.php';

$nome = $_POST['nome'];
$datanasc = $_POST['data_nasc'];
$sexo = $_POST['sexo'];
$profissao = $_POST['profissao'];
$funcao = $_POST['funcao'];
$estado = $_POST['estado'];
$partido = $_POST['partido'];
$id = $_POST['id_politico'];
$SQL = "UPDATE POLITICO SET (ID_POLITICO, NOME = :nome, DATA_NASC = :data_nasc, SEXO = :sexo, PROFISSAO = :profissao, FUNCAO = :funcao, ESTADO = :estado, PARTIDO = :partido) WHERE ID_POLITICO = :id";
        
$stmt = $conn->prepare($SQL);
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $datanasc);
$stmt->bindParam(3, $sexo);
$stmt->bindParam(4, $profissao);
$stmt->bindParam(5, $funcao);
$stmt->bindParam(6, $estado);
$stmt->bindParam(7, $partido);
$stmt->bindParam(7, $id, PDO:PARAM_INT);
$stmt->execute();
echo "<script>alert('Candidato alterado com sucesso!');</script>";
echo "<script language=\"javascript\">window.location=\"candidato.php\";</script>";
?>

