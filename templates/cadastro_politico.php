<?php

require_once 'config.php';

$nome = $_POST['nNome'];
$datanasc = $_POST['nData'];
$sexo = $_POST['nSexo'];
$profissao = $_POST['nProfissao'];
$funcao = $_POST['nFuncao'];
$cidade = $_POST['nCid'];
$partido = $_POST['nPartido'];

$SQL = "INSERT INTO T_POLITICO (id, nome, data_nasc, sexo, profissao, funcao, cidade, partido)
        VALUES (DEFAULT, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
?>
