<?php
  include('./PHP/login_php.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        <h4 class="card-title">Log In:</h4>
        <form method="post" action="crud.php">
          <label class="form-label" for="email">E-mail:</label><br>
          <input class="form-control" type="email" name="email" id="email"><br>
          <label class="form-label" for="senha">Senha:</label><br>
          <input class="form-control" type="password" name="senha" id="senha"><br>
          <input class="btn btn-success" type="submit" name="submit" id="submit" value="Entrar">
        </form>
      </div>
    </div>
  </div>
</body>
</html>