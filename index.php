<?php
  include('./PHP/conectar.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Admin</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg" style="background-color: #094343;">
    <div class="container-fluid ">
      <a class="navbar-brand" href="#" style="color: #fbc404;">Monitor Farma</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <div class="container mt-5">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Produto</th>
          <th scope="col">Valor</th>
          <th scope="col">Categoria</th>
          <th scope="col">Uso</th>
          <th scope="col">Classe</th>
          <th scope="col">Fornecedor</th>
          <th scope="col">Quantidade</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="row">1</td>
          <td>Dipirona</td>
          <td>R$ 7,00</td>
          <td>Remédio</td>
          <td>Oral</td>
          <td>Anti-inflamatório</td>
          <td>Medley</td>
          <td>23</td>
          <td>
            <button class="btn btn-warning">Editar</button>
          </td>
          <td>
            <button class="btn btn-outline-danger">Deletar</button>
          </td>
        </tr>
        <tr>
          <td scope="row">2</td>
          <td>Halls Preto</td>
          <td>R$ 2,00</td>
          <td>Consumível</td>
          <td>Oral</td>
          <td>Alimento</td>
          <td>Halls</td>
          <td>21</td>
          <td>
            <button class="btn btn-warning">Editar</button>
          </td>
          <td>
            <button class="btn btn-outline-danger">Deletar</button>
          </td>
        </tr>
      <tr>
        <td scope="row">3</td>
        <td>Hipoglós</td>
        <td>R$ 29,00</td>
        <td>Remédio</td>
        <td>Dermatológico</td>
        <td>Terapêutica</td>
        <td>Johnson & Johnson</td>
        <td>7</td>
        <td>
          <button class="btn btn-warning">Editar</button>
        </td>
        <td>
          <button class="btn btn-outline-danger">Deletar</button>
        </td>
      </tr>
      <tr>
        <td scope="row">4</td>
        <td>Fralda</td>
        <td>R$ 139,00</td>
        <td>Higiene</td>
        <td>Higiênico</td>
        <td>Higiene</td>
        <td>Pampers</td>
        <td>13</td>
        <td>
          <button class="btn btn-warning">Editar</button>
        </td>
        <td>
          <button class="btn btn-outline-danger">Deletar</button>
        </td>
      </tr>
      </tbody>
    </table>
  </div>
  <footer class="container">
    
  </footer>
</body>
</html>