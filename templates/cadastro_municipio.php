<?php

require_once 'config.php';

$estado = $_POST['estado'];
$municipio = $_POST['municipio'];

$SQL = "INSERT INTO MUNICIPIO (ID_MUNICIPIO, NOME, ESTADO) VALUES (DEFAULT, ?, ?)";
$stmt = $conn->prepare($SQL);
$stmt->bindParam(1, $municipio);
$stmt->bindParam(2, $estado);

$stmt->execute();
echo "<script>alert('Municipio cadastrado com sucesso!');</script>";
echo "<script language=\"javascript\">window.location=\"municipio.php\";</script>";

 ?>
