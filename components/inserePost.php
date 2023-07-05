<?php include('../config.php') ?>
<?php
  session_start();
  $user_id = $_SESSION['id_users'];
  $title = $_POST['title'];
  $intro = $_POST['intro'];
  $text = $_POST['text'];
  $accao = $_POST['accao'];
  $id= $_POST['id_artigo'];

  
  if( $accao =='novo' ){
    $sql = "insert into post
    (users_id_users, post_title, post_intro, post_text)
    values
    ('$user_id', '$title', '$intro', '$text')";
  
  } else {
    $sql = "update post 
    set 
    post_title='$title',
    post_intro='$intro',
    post_text='$text'

    where
    id_blog_post= $id
    ";
  }
 
  $resultado = mysqli_query($ligacao, $sql);

  echo  $ligacao->insert_id;

die();
  header('location:../index.php?area=admin-blog');
?>
