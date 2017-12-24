<?php session_start();
  require_once "config.php";

  $user = $_POST['user'];
  $password = $_POST['password'];

  if (empty($user) || empty($password)) {
    echo "<script>alert('Digite os campos em branco'); history.back();</script>";
  	exit;
  }

 ?>
