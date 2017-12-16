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
  header('Location: mostrar_lista.php');
    exit;
}

$sql_delete = "DELETE FROM politico WHERE ID_POLITICO = ?";
$delete = $conn->prepare($sql_delete);
$delete->bindParam(1, $id);

if($delete->execute()){
   echo "<script>alert('Candidato excluido com sucesso!');</script>";
  header('Location: mostrar_lista.php');
 }else{
  echo "Erro ao Remover";
}
?>
