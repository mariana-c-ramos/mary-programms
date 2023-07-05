<div class="wrapper">
    <h2 class="section__title">BLOG AREA</h2>
    <form method="post" action="components/inserePost.php" class="blog__form" style="margin-bottom: 24px">
        <div class="center">
            <div class="blog__input">
                <label for="title">TITLE</label>
                <input type="text" name="title">
            </div>
            <div class="blog__input">
                <label for="intro">INTRO</label>
                <textarea name="intro" cols="30"></textarea>
            </div>
            <div class="blog__input">
                <label for="text">TEXT</label>
                <textarea name="text" cols="30"></textarea>
            </div>
        </div>
        <button class="main__btn">NEW BLOG POST</button>
    </form>

    <div class="post__list">
        <?php
            $query_get__posts = "select * from post";
            $resultado = mysqli_query($ligacao,$query_get__posts);
            while($linha = mysqli_fetch_assoc($resultado)){
        ?>

        <div class="post__info">
            <p><?php echo $linha['post_title'];?></p>
        </div>

        <?php
        }
        ?>
    </div>

    <a href="index.php?area=admin-area" class="main__btn">GO BACK</a>
</div>