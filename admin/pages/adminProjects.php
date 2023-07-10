<div class="wrapper">
    <?php 
        if(isset($_GET['id_projecto'])){
            $id=$_GET['id_projecto'] ;
            $sql = "select * from projects where id_projeco=$id";

            $resultado_detalhe = mysqli_query($ligacao,$sql);
            $detalhe=  mysqli_fetch_assoc($resultado_detalhe);
            $accao = "editar";
        } else {
            $accao = "novo";
            $id="";

        }
    ?>
    <h2 class="section__title">PROJECTS AREA</h2>
    <form method="post" action="components/insereProject.php" class="blog__form" style="margin-bottom: 24px" enctype="multipart/form-data">
        <div class="center">
            <div class="blog__input">
                <label for="title">PROJECT NAME</label>
                <input type="text" name="title" value="<?php echo (isset($detalhe['nome_projecto'])) ? $detalhe['nome_projecto'] :"" ?>">
            </div>
            <div class="projects__input">
                <input type="checkbox" id="tech1" name="tech1" value="HTML">
                <label for="tech1"><?php echo (isset($detalhe['nome_tags'])) ? $detalhe['nome_tags'] :"" ?></label><br>
                <img src="" alt="" value="<?php echo (isset($detalhe['icon_tags'])) ? $detalhe['icon_tags'] :"" ?>">
                <?php
                
                $sql_tags="select * from tags";
                $resultado_tags= mysqli_query($ligacao, $sql_tags);


                while($linha_tags = mysqli_fetch_assoc($resultado_tags)){ 
                
                ?>
                     <input type ="checkbox" name="tags_associadas[]" value="<?php echo $linha_tags['id_tags']?>"> <?php echo $linha_tags['nome_tags']; ?>
                <?php } ?>

            </div>
            <div class="blog__input">
                <label for="text">DESCRIPTION</label>
                <textarea name="text" cols="30"><?php echo (isset($detalhe['text_projecto'])) ? $detalhe['text_projecto'] :"" ?></textarea>
            </div>
            <div class="blog__input">
                <label for="images">COVER IMAGE</label>
                <input name="upload_cover" type="file" multiple="multiple" value="<?php echo (isset($detalhe['cover_projecto'])) ? $detalhe['cover_projecto'] :"" ?>"/>
            </div>
            <div class="blog__input">
                <label for="images">MOCKUPS</label>
                <input name="upload_fotos[]" type="file" multiple="multiple" value="<?php echo (isset($detalhe['project__imgs'])) ? $detalhe['project__imgs'] :"" ?>"/>
            </div>
        </div>
        <button class="main__btn">SUBMIT</button>
        <input type="hidden" name="accao" value ="<?php echo $accao; ?>">
        <input type="hidden" name="id_project" value ="<?php echo $id; ?>">
    </form>
    <a href="index.php?area=admin-area" class="main__btn">GO BACK</a>
</div>