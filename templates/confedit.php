<?php

require_once 'config.php';
$id = $_GET['id'];
$nome = $_POST['nome'];
$datanasc = $_POST['data_nasc'];
$sexo = $_POST['sexo'];
$profissao = $_POST['profissao'];
$funcao = $_POST['funcao'];
$estado = $_POST['estado'];
$partido = $_POST['partido'];
$id = $_POST['id_politico'];
$SQL = "UPDATE POLITICO, ESTADO, PARTIDO SET (NOME = ?, DATA_NASC = ?, SEXO = ?, PROFISSAO = ?, FUNCAO = ?, ESTADO = ?, PARTIDO = ?) WHERE ID_POLITICO = ?";
        
$stmt = $conn->prepare($SQL);
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $datanasc);
$stmt->bindParam(3, $sexo);
$stmt->bindParam(4, $profissao);
$stmt->bindParam(5, $funcao);
$stmt->bindParam(6, $estado);
$stmt->bindParam(7, $partido);
$stmt->execute();
echo "<script>alert('Candidato alterado com sucesso!');</script>";
echo "<script language=\"javascript\">window.location=\"candidato.php\";</script>";
?>

