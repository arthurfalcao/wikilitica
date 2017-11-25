<?php

require_once 'config.php';

$estado = $_POST['estado'];
$capital = $_POST['municipio'];

$SQL1 = "INSERT INTO ESTADO (ID_ESTADO, NOME) VALUES (DEFAULT, ?)";
$stmt1 = $conn->prepare($SQL1);
$stmt1->bindParam(1, $estado);

$stmt1->execute();
echo "<script>alert('Estado cadastrado com sucesso!');</script>";
echo "<script language=\"javascript\">window.location=\"estado.php\";</script>";
 ?>
