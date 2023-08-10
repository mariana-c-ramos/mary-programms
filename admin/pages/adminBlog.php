<!-- Area to create new posts and updates already created ones -->
<div class="wrapper">
    <?php 
        if(isset($_GET['id_post'])){
            $id=$_GET['id_post'] ;
            $sql = "select * from post where id_blog_post=$id";

            $resultado_detalhe = mysqli_query($ligacao,$sql);
            $detalhe=  mysqli_fetch_assoc($resultado_detalhe);
            $accao = "editar";
        } else {
            $accao = "novo";
            $id="";

        }
    ?>
    <h2 class="section__title">BLOG AREA</h2>
    <form method="post" action="components/inserePost.php" class="blog__form" style="margin-bottom: 24px">
        <div class="center">
            <div class="blog__input">
                <label for="title">TITLE</label>
                <input type="text" name="title" value="<?php echo (isset($detalhe['post_title'])) ? $detalhe['post_title'] :""  ?>">
            </div>
            <div class="blog__input">
                <label for="intro">INTRO</label>
                <textarea name="intro" cols="30"><?php echo (isset($detalhe['post_intro'])) ? $detalhe['post_intro'] :""  ?></textarea>
            </div>
            <div class="blog__input">
                <label for="text">TEXT</label>
                <textarea name="text" cols="30"><?php echo (isset($detalhe['post_text'])) ? $detalhe['post_text'] :""  ?></textarea>
            </div>
        </div>
        <button class="main__btn">NEW BLOG POST</button>
        <input type="hidden" name="accao" value ="<?php echo $accao; ?>">
        <input type="hidden" name="id_artigo" value ="<?php echo $id; ?>">
    </form>

    <div class="post__list">
        <?php
            $query_get__posts = "select * from post";
            $resultado = mysqli_query($ligacao,$query_get__posts);
            while($linha = mysqli_fetch_assoc($resultado)){
        ?>

        <div class="post__info">
            <p>
                <a href="index.php?area=admin-blog&id_post=<?php echo $linha['id_blog_post'];?>"><?php echo $linha['post_title'];?>
            </a>
        </p>
        </div>

        <?php
        }
        ?>
    </div>

    <a href="index.php?area=admin-area" class="main__btn admin__main-btn">GO BACK</a>
</div>