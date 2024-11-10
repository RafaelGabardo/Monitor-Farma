<?php
  include('./PHP/adicionar_php.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Adicionar</title>
</head>
<body style="height: 100dvh;">
  <nav class="navbar navbar-expand-lg" style="background-color: #094343;">
    <div class="container-fluid ">
      <a class="navbar-brand" href="#" style="color: #fbc404;">Monitor Farma</a>
    </div>
  </nav>
  <div class="my-5 container" style="height: 100%;">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Adicionar Produto:</h4>
        <form action="crud_fornecedor.php" method="post">
          <label class="form-label" for="fornecedor">Nome do Fornecedor:</label><br>
          <input class="form-control" type="text" name="fornecedor" id="fornecedor"><br>
          <label class="form-label" for="cnpj">CNPJ do Fornecedor:</label><br>
          <input class="form-control" type="text" name="cnpj" id="cnpj"><br>
          <label class="form-label" for="cep">CEP do Fornecedor</label><br>
          <input class="form-control" type="text" name="cep" id="cep"><br>
          <input class="btn btn-success" type="submit" name="submit" id="submit">
        </form>
      </div>
    </div>
  </div>
</body>
</html>