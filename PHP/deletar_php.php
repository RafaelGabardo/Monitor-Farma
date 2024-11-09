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
    $deletar = "
      DELETE FROM Produto
      WHERE ID_Prod = '$id'
    ";

    $delecao = mysqli_query($conectar, $deletar);

    if (!$delecao) {
      die('Deu ruim');
    }
  }
?>