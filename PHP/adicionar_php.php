<?php
  include('conectar.php');

  if (isset($_POST['submit'])) {
    $nome = $_POST['fornecedor'];
    $cnpj = $_POST['cnpj'];
    $cep = $_POST['cep'];

    $inserir_fornecedor = "
      INSERT INTO Fornecedor (Nome, CNPJ, CEP)
      VALUES ('$nome', '$cnpj', '$cep')
    ";

    $resultado_fornecedor = mysqli_query($conectar, $inserir_fornecedor);

    if (!$resultado_fornecedor) {
      die('Deu ruim em adicionar');
    }
  }
?>