<?php include('../config.php'); ?>
<?php
  $email = $_POST['email'];
  $verificar_email = "select * from users where users_email = '$email' ";

  $resultado = mysqli_query($ligacao, $verificar_email);
  $numero_emails = $resultado->num_rows;

  if($numero_emails >= 1){
    echo 'este email já se encontra em uso';
  } else {
    echo 'email disponivel';
  }

?>