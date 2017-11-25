<?php

require_once 'config.php';

$email = $_POST['nEmail'];
$senha = $_POST['nSenha'];
$cpf = $_POST['nEmail'];
$nome = $_POST['nNome'];
$telefone = $_POST['nTelefone'];
$datanasc = $_POST['nData'];
$sexo = $_POST['nSexo'];
$endereco = $_POST['nEnd'];
$estado = $_POST['nEst'];
$cidade = $_POST['nCid'];

$SQL = "INSERT INTO usuario (CPF, EMAIL, SENHA, NOME, TELEFONE, ENDERECO, DATA_NASC, ESTADO, CIDADE, SEXO)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($SQL);
$stmt->bindParam(1, $cpf);
$stmt->bindParam(2, $email);
$stmt->bindParam(3, $senha);
$stmt->bindParam(4, $nome);
$stmt->bindParam(5, $telefone);
$stmt->bindParam(6, $endereco);
$stmt->bindParam(7, $datanasc);
$stmt->bindParam(8, $estado);
$stmt->bindParam(9, $cidade);
$stmt->bindParam(10, $sexo);

if($stmt->execute()){
    echo "<script>alert('Usuário cadastrado com sucesso');</script>";
    echo "<script language=\"javascript\">window.location=\"login.php\";</script>";
}else{
    echo "<script>alert('Email já cadastrado'); history.back();</script>";
}

 ?>
