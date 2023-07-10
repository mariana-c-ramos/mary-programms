<?php include('../config.php') ?>
<?php
  session_start();
  $user_id = $_SESSION['id_users'];
  $id= $_POST['id_project'];
  $title = $_POST['title'];
  //$techs = $_POST['tech1'];
  //$tags_associadas =$_POST['tags_associadas'];
  echo "<pre>";
  print_r( $_FILES['upload_fotos']);
  echo "</pre>";
  die();


  $text = $_POST['text'];
  $cover_img = $_POST['cover'];
  //$mockups = $_POST[];
  $accao = $_POST['accao'];

  
  if( $accao =='novo' ){
    $sql_projects = "insert into projectos
    (nome_projecto)
    values
    ('$title')";

    $resultado_projects = mysqli_query($ligacao, $sql_projects);
  //$resultado_project = mysqli_query($ligacao, $sql_project);

    $id_inserido =$ligacao->insert_id; 

    for($i=0;$i<count($tags_associadas);$i++) {
        $sql_insere_tag = "insert into projectos_has_tags(fk_id_projecto, fk_id_tags)
        values($id_inserido, $tags_associadas[$i]);
        ";

        $re_tag = mysqli_query($ligacao, $sql_insere_tag);
    }
    

   
  
  } else {
    $sql = "update projectos 
    set 
    nome_projecto='$title'

    where
    id_projecto= $id
    ";
  }
 
  
  echo  $id_inserido;

  $sq

  //die();
  //header('location:../index.php?area=admin-projects');
?>
