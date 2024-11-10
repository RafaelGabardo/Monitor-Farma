<?php
  $host = 'localhost';
  $usuario = 'root';
  $senha = 'PUC@1234';
  $bd = 'monitor_farma';

  try {
    $conectar = mysqli_connect($host, $usuario, $senha, $bd);
  } catch (Exception $e) {
    echo 'Erro! ', $e->getMessage();
  }
?>