 <?php
  require_once 'config.php';
  session_start();
  if (!isLogado()) {
    echo "<script>alert('Entre para acessar.');</script>";
    echo "<script language=\"javascript\">window.location=\"login.php\";</script>";
  }

  // pega o ID da URL
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

//Valida a variavel da URL
if (empty($id)){
	echo "ID para alteração não definido";
    exit;
}
$sql_delete = "DELETE FROM politico WHERE id = :id";
$delete = $conn->prepare($sql_delete);
$delete->binParam(':id', $id, PDO::PARAM_INT);

if($sql_delete->execute()){
  header('Location: index.php');
  echo "candidato Excluido com sucesso";
}else{
  echo "Erro ao Remover";
}
?>