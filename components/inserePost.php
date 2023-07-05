<?php include('../config.php') ?>
<?php
  session_start();
  $user_id = $_SESSION['id_users'];
  $title = $_POST['title'];
  $intro = $_POST['intro'];
  $text = $_POST['text'];
  
  $sql = "insert into post
  (users_id_users, post_title, post_intro, post_text)
  values
  ('$user_id', '$title', '$intro', '$text')";

  mysqli_query($ligacao, $sql);

  header('location:../index.php?area=admin-blog');
?>
