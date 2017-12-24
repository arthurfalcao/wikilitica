<?php session_start();
  require_once "config.php";

  $user = $_POST['user'];
  $password = $_POST['password'];

  if (empty($user) || empty($password)) {
    echo "<script>alert('Digite os campos em branco'); history.back();</script>";
  	exit;
  }

$SQL = "SELECT USER FROM admin WHERE USER = ? AND PASSWORD = ?";
$stmt = $conn->prepare($SQL);
$stmt->bindParam(1, $user);
$stmt->bindParam(2, $password);
$stmt->execute();

$superuser = $stmt->fetch(PDO::FETCH_ASSOC);

$_SESSION['logado'] = true;
$_SESSION['superuser'] = true;

echo "<script>alert('Usuário logado com sucesso');</script>";
echo "<script language=\"javascript\">window.location=\"../index.php\";</script>";
 ?>
