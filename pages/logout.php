<!-- Small piece of code to allow the user to logout -->
<?php
  session_start();
  session_destroy();
  header('location:../index.php?area=login');
?>
