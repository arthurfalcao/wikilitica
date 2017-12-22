<?php

function isLogado() {
  if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    return false;
  }
  return true;
}

function setDeslogado(){
  $_SESSION['logado'] = false;
  session_destroy();
}

 ?>
