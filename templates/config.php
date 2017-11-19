<?php

$host = "localhost";
$db_name = "wikilitica";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host={$host}; dbname={$db_name}", $username, $password);
} catch (PDOException $e) {
  echo "Erro na conexão: " . $e->getMessage();
}


 ?>
