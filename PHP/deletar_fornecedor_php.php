<?php
  include('conectar.php');

  $id = $_GET['id'];

  $select_deletar_fornecedor = "
    SELECT F.Nome AS Nome
    FROM Fornecedor F
    WHERE ID_Fornecedor = '$id'
  ";

  $resultado_deletar_fornecedor = mysqli_query($conectar, $select_deletar_fornecedor);

  if (!$resultado_deletar_fornecedor) {
    die('Deu ruim');
  }

  if (isset($_POST['submit'])) {
    $deletar_fornecedor = "
      DELETE FROM Fornecedor
      WHERE ID_Fornecedor = '$id'
    ";

    $delecao_fornecedor = mysqli_query($conectar, $deletar_fornecedor);

    if (!$delecao_fornecedor) {
      die('Deu ruim');
    }
  }
?>