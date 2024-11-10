<?php
  include('./PHP/atualizar_produto.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Editar</title>
</head>
<body style="height: 100dvh;">
  <nav class="navbar navbar-expand-lg" style="background-color: #094343;">
    <div class="container-fluid ">
      <a class="navbar-brand" href="#" style="color: #fbc404;">Monitor Farma</a>
    </div>
  </nav>
  <div class="d-flex align-items-center justify-content-center" style="height: 80%;">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">
        Editar 
        <?php
          if (mysqli_num_rows($resultado_editar) > 0) {
            while ($row = mysqli_fetch_assoc($resultado_editar)) {
              echo $row['Nome'];
            }
          }
        ?>
        </h4>
        <form action="#" method="post">
          <label class="form-label" for="nome">Nome:</label><br>
          <input class="form-control" type="text" name="nome" id="nome"><br>
          <label class="form-label" for="preco">Preço:</label><br>
          <input class="form-control" type="number" name="preco" id="preco"><br>
          <label class="form-label" for="prescricao">Prescrição:</label><br>
          <input class="form-control" type="text" name="prescricao" id="prescricao"><br>
          <input class="btn btn-success" type="submit" name="submit" id="submit" value="Enviar">
        </form>
      </div>
    </div>
  </div>
</body>
</html>