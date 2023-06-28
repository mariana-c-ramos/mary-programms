<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="mary programms' portfolio, full of amazing and creative projects!">
    <meta name="keywords" content="mary programms,portfolio, frontend development, html, css, javascript, php, react">
    <meta name="author" content="Mary Programmss">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/icons/favicon.png">
    <title>mary programms</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Oxanium:wght@200;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php include('./content/pages/mainLayout.php') ?>
    <?php
        if(isset($_GET['area'])){
            $area_escolhida = $_GET['area'];
            if($area_escolhida == 'about-miana'){
                include('./content/pages/about.php');
            } else if($area_escolhida == 'projects'){
                include('./content/pages/projects.php');
            } else if($area_escolhida == 'career'){
                include('./content/pages/career.php');
            } else if($area_escolhida == 'blog'){
                include('./content/pages/blog.php');
            } else if($area_escolhida == 'contacts'){
                include('./content/pages/contacts.php');
            } else{
                include('./content/pages/erro.php');
            }
        } else {
            include('./content/pages/home.php');
        }
    ?>

    <script src="./js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="./js/app.js"></script>
</body>
</html>