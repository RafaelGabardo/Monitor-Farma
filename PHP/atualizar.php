<?php
  include('conectar.php');
  include('selecionar.php');

  if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
  }

  $select_editar = "
    SELECT P.Nome AS Nome
    FROM Produto P
    WHERE ID_Prod = '$id'
  ";

  $resultado_editar = mysqli_query($conectar, $select_editar);

  if (!$resultado_editar) {
    die('Deu ruim');
  }

  if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $prescricao = $_POST['prescricao'];

    if ($nome != null) {
      $update_nome = "UPDATE Produto SET Nome = '$nome' WHERE ID_Prod = '$id'";

      $resultado_nome = mysqli_query($conectar, $update_nome);
    }

    if ($preco != null) {
      $update_preco = "UPDATE Produto SET PrecoUnitario = '$preco' WHERE ID_Prod = '$id'";

      $resultado_preco = mysqli_query($conectar, $update_preco);
    }

    if ($prescricao != null) {
      $update_prescricao = "UPDATE Produto SET PrecisaPrescricao = '$prescricao' WHERE ID_Prod = '$id'";
    
      $resultado_prescricao = mysqli_query($conectar, $update_prescricao);
    }

    if (!$resultado_nome || !$resultado_preco || !$resultado_prescricao) {
      die('Deu ruim');
    }
  }
?>