 <?php
  require_once 'config.php';
  session_start();
  if (!isLogado()) {
    echo "<script>alert('Entre para acessar.');</script>";
    echo "<script language=\"javascript\">window.location=\"login.php\";</script>";
  }

  // pega o ID da URL
$id = isset($_GET['ID_POLITICO']) ? (int) $_GET['ID_POLITICO'] : null;

//Valida a variavel da URL
if (empty($id)){
	echo "ID para alteração não definido";
    exit;
}
$PDO = db_connect();
$sql_delete = "DELETE  from politico WHERE id = :ID_POLITICO";
$delete = $PDO->prepare($sql_delete);
$delete->binParam(':ID_POLITICO', $id, PDO::PARAM_INT);

if($sql_delete->execute()){
  header('Location: index.php');
  echo "candidato Excluido com sucesso";
}else{
  echo "Erro ao Remover";
}
?>