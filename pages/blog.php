<!-- Structure for my blog section -->
<div class="wrapper">
    <h2 class="section__title">"A BLOG... THAT'S A BIT <br>2008 BUT LET'S SEE!"</h2>
    <div class="swiper-blog">
        <div class="swiper-wrapper swiper-blog-wrapper">
            <?php
                $query_get__posts = "select * from post";
                $resultado = mysqli_query($ligacao,$query_get__posts);
                while($linha = mysqli_fetch_assoc($resultado)){
            ?>

            <div class="swiper-slide swiper-blog-slide">
                <h3 class="section__title-blog"><?php echo $linha['post_title'];?></h3>
                <p class="section__p-blog"><?php echo $linha['post_intro'];?></p>
                <p class="section__p-blog section__p-blog-text article-<?php echo $linha['id_blog_post']?>"><?php echo $linha['post_text'];?></p>
                <div class="btn" onclick="showText2('<?php echo $linha['id_blog_post']?>')">Read more</div>
            </div>

            <?php
            }
            ?>
        </div>
    </div>
</div>