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

$SQL = "INSERT INTO T_USUARIO (id, email, senha, cpf, n ome, telefone, data_nasc, sexo, endereco, estado, cidade)
        VALUES (DEFAULT, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($SQL);
$stmt->bindParam(1, $email);
$stmt->bindParam(2, $senha);
$stmt->bindParam(3, $cpf);
$stmt->bindParam(4, $nome);
$stmt->bindParam(5, $telefone);
$stmt->bindParam(6, $datanasc);
$stmt->bindParam(7, $sexo);
$stmt->bindParam(8, $endereco);
$stmt->bindParam(9, $estado);
$stmt->bindParam(10, $cidade);

if($stmt->execute()){
    echo "<script>alert('Usuário cadastrado com sucesso');</script>";
    echo "<script language=\"javascript\">window.location=\"login.html\";</script>";
}else{
    echo "<script>alert('Email já cadastrado'); history.back();</script>";
}

 ?>
