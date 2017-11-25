<?php

require_once 'config.php';

$nome = $_POST['nome'];
$sigla = $_POST['sigla'];
$espectro = $_POST['espectro'];

if ($espectro == "Selecione") {
  $espectro = NULL;
  echo "<script>alert('Espectro não selecionado'); history.back();</script>";
  exit;
}

$SQL = "INSERT INTO PARTIDO (ID_PARTIDO, NOME, SIGLA, ESPECTRO) VALUES (DEFAULT, ?, ?, ?)";
$stmt = $conn->prepare($SQL);
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $sigla);
$stmt->bindParam(3, $espectro);



try {
  $stmt->execute();
  echo "<script>alert('Partido cadastrado com sucesso');</script>";
  echo "<script language=\"javascript\">window.location=\"partido.php\";</script>";
} catch (PDOException $e) {
  echo "Erro: " . $e->getMessage();
}

 ?>
