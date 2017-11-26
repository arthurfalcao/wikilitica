<?php

function isLogado() {
  if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    return false;
  }
  return true;
}

function setDeslogado(){
  $_SESSION['logged_in'] = false;
  session_destroy();
}

 ?>
