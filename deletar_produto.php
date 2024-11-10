<?php
  include('./PHP/deletar_produto_php.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Deletar</title>
</head>
<body class="alert alert-danger" style="height: 100dvh;">
  <div class="container">
    <h1 class="alert-heading">
    Tem certeza que deseja deletar o produto 
      <?php
        if (mysqli_num_rows($resultado_deletar) > 0) {
          while ($row = mysqli_fetch_assoc($resultado_deletar)) {
            echo $row['Nome'];
          }
        }
      ?>
    ? (Clique 2 vezes e depois retorne para crud_produto.php)
    </h1>
    <div class="card alert alert-danger border-0 d-flex align-items-center justify-content-center">
      <div class="card-body">
        <form action="#" method="post">
          <input class="btn btn-danger p-5" type="submit" name="submit" id="submit" value="Sim">
          <a href="crud_produto.php" class="btn btn-success mx-5 p-5">Não</a>
        </form>
      </div>
    </div>
  </div>
</body>
</html>