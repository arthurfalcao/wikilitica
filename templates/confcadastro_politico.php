<?php

require_once 'config.php';

$nome = $_POST['nNome'];
$datanasc = $_POST['nData'];
$sexo = $_POST['nSexo'];
$profissao = $_POST['nProfissao'];
$funcao = $_POST['nFuncao'];
$cidade = $_POST['nCid'];
$partido = $_POST['nPartido'];

$SQL = "INSERT INTO politico (id_politico, nome, idade, sexo, profissao, funcao, cidade, partido)
        VALUES (DEFAULT, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($SQL);
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $datanasc);
$stmt->bindParam(3, $sexo);
$stmt->bindParam(4, $profissao);
$stmt->bindParam(5, $funcao);
$stmt->bindParam(6, $cidade);
$stmt->bindParam(7, $partido);

$stmt->execute()
?>
