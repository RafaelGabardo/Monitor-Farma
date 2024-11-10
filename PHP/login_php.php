<?php
  include('conectar.php');

  if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $select_email = "SELECT Email FROM Usuario WHERE Email = '$email'";

    $select_senha = "SELECT Senha FROM Usuario WHERE Senha = '$senha'";

    if (!mysqli_query($conectar, $select_email) || !mysqli_query($conectar, $select_senha)) {
      echo 'E-mail ou senha incorretos';
    }
  }
?>