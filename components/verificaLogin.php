<!-- Validates if there was a sucessful login -->
<?php include('../config.php'); ?>
<?php
  $user = $_POST['email'];
  $pass = $_POST['pass'];

  $verificar_login = "select * from users where
  users_email = '$user' and users_pass = '$pass' ";

  $resultado = mysqli_query($ligacao,$verificar_login);
  $numero_registos = $resultado->num_rows;

  if($numero_registos != 1){
    header('location:../index.php?area=erro');
  } else {
    session_start();
    $registo = mysqli_fetch_assoc($resultado);

    $user_id = $registo['id_users'];
    $user_nome = $registo['users_name'];

    $_SESSION['id_users'] = $user_id;
    $_SESSION['users_name'] = $user_nome;

    header('location:../index.php?area=admin-area');
  }
?>