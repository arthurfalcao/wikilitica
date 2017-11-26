<?php

require_once 'config.php';

$email = $_POST['nEmail'];
$senha = $_POST['nSenha'];

if (empty($email) || empty($senha)) {
  echo "<script>alert('Email ou senha incorretos'); history.back();</script>";
	exit;
}

$SQL = "SELECT * FROM usuario WHERE email = ? AND senha = ?";
$stmt = $conn->prepare($SQL);
$stmt->bindParam(1, $email);
$stmt->bindParam(1, $senha);

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

$user = $users[0];

session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_email'] = $user['nEmail'];

echo "<script>alert('Usuário logado com sucesso');</script>";
echo "<script language=\"javascript\">window.location=\"../index.php\";</script>";

 ?>
