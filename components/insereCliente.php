<!-- Allows to create a new account -->
<?php include('../config.php'); ?>
<?php

  $name_inserido = $_POST['name'];
  $email_inserido = $_POST['email'];
  $pass_inserido = $_POST['pass'];

  $query_de_registo = "insert into users
  (users_name, users_email, users_pass)
  values
  ('".$name_inserido."',
  '".$email_inserido."',
  '".$pass_inserido."')";

  mysqli_query($ligacao, $query_de_registo);

  header('location:../index.php');

?>