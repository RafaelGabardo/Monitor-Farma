<?php
  include('conectar.php');
  include('selecionar.php');

  $id = $_GET['id'];

  $select_editar = "
    SELECT F.Nome AS Nome
    FROM Fornecedor F
    WHERE ID_Fornecedor = '$id'
  ";

  $resultado_editar = mysqli_query($conectar, $select_editar);

  if (!$resultado_editar) {
    die('Deu ruim');
  }

  if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $cep = $_POST['cep'];

    if ($nome != null) {
      $update_nome = "UPDATE Fornecedor SET Nome = '$nome' WHERE ID_Fornecedor = '$id'";

      $resultado_nome = mysqli_query($conectar, $update_nome);
    }

    if ($cnpj != null) {
      $update_cnpj = "UPDATE Fornecedor SET CNPJ = '$cnpj' WHERE ID_Fornecedor = '$id'";

      $resultado_cnpj = mysqli_query($conectar, $update_cnpj);
    }

    if ($cep != null) {
      $update_cep = "UPDATE Fornecedor SET CEP = '$cep' WHERE ID_Fornecedor = '$id'";
    
      $resultado_cep = mysqli_query($conectar, $update_cep);
    }

    if (!$resultado_nome || !$resultado_cnpj || !$resultado_cep) {
      die('Deu ruim');
    }
  }
?>