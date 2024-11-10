<?php
  include('conectar.php');

  $id = $_GET['id'];

  $select_deletar = "
    SELECT P.Nome AS Nome
    FROM Produto P
    WHERE ID_Prod = '$id'
  ";

  $resultado_deletar = mysqli_query($conectar, $select_deletar);

  if (!$resultado_deletar) {
    die('Deu ruim');
  }

  if (isset($_POST['submit'])) {
    $deletar_produto = "
      DELETE FROM Produto
      WHERE ID_Prod = '$id'
    ";

    $delecao_produto = mysqli_query($conectar, $deletar_produto);

    if (!$delecao_produto) {
      die('Deu ruim');
    }
  }
?>