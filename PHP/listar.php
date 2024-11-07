<?php
  include('conectar.php');

  $select = "SELECT * FROM produto";

  $query = mysqli_query($conectar, $select);

  if ($query) {
    echo 'Deu bom';
  } else {
    die('Deu ruim');
  }
?>