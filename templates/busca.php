<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
  require_once 'config.php';

  $SQL = "SELECT * FROM ESTADO";
  $stmt = $conn->prepare($SQL);
  $stmt->execute();

  if (isset($_POST['button'])) {
    $nomeCandidato = $_POST['nome_candidato'];
    $idEstado = $_POST['estado'];
    $funcao = $_POST['funcao'];

    $SQL_PTD = "SELECT POLITICO.ID_POLITICO, POLITICO.NOME AS NOME, POLITICO.FUNCAO, ESTADO.NOME AS ESTADO FROM POLITICO INNER JOIN ESTADO ON ESTADO.ID_ESTADO = POLITICO.ESTADO WHERE POLITICO.NOME LIKE ? AND POLITICO.ESTADO = ? AND POLITICO.FUNCAO = ?";

    $stmt_can = $conn->prepare($SQL_PTD);
    $params = array("%$nomeCandidato%", $idEstado, $funcao);
    $stmt_can->execute($params);
  }
  include "cabecalho.php"
 ?>



  </body>
</html>
