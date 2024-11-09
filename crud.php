<?php
  include('./PHP/conectar.php');
  include('./PHP/selecionar.php');
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
    </div>
  </nav>
  <div class="container mt-5">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Produto</th>
          <th scope="col">Preço</th>
          <th scope="col">Uso</th>
          <th scope="col">Prescrição</th>
          <th scope="col">Fornecedor</th>
          <th scope="col">Quantidade</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php
          if (mysqli_num_rows($resultado_crud) > 0) {
            while ($row = mysqli_fetch_assoc($resultado_crud)) {
              echo '
                <tr>
                  <td scope="row">' . $row['ID'] . '</td>
                  <td>' . $row['Produto'] . '</td>
                  <td>' . $row['Preço'] . '</td>
                  <td>' . $row['Uso'] . '</td>
                  <td>' . $row['Prescrição'] . '</td>
                  <td>' . $row['Fornecedor'] . '</td>
                  <td>' . $row['Quantidade'] . '</td>
                  <td>
                    <a href="editar.php?' . $row['ID'] . '" class="btn btn-warning" role="button">Editar</a>
                  </td>
                  <td>
                    <button class="btn btn-outline-danger">Deletar</button>
                  </td>
                </tr>
              ';
            }
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>

<!-- id="' . $row['ID'] . '"  -->