<div class="wrapper">
    <?php 
        if(isset($_GET['id_project'])){
            $id=$_GET['id_project'] ;
            $sql = "select * from projects where id_projects=$id";

            $resultado_detalhe = mysqli_query($ligacao,$sql);
            $detalhe=  mysqli_fetch_assoc($resultado_detalhe);
            $accao = "editar";
        } else {
            $accao = "novo";
            $id="";

        }
    ?>
    <h2 class="section__title">PROJECTS AREA</h2>
    <form method="post" action="components/insereProjeto.php" class="blog__form" style="margin-bottom: 24px">
        <div class="center">
            <div class="blog__input">
                <label for="title">PROJECT NAME</label>
                <input type="text" name="title" value="<?php echo (isset($detalhe['project__name'])) ? $detalhe['project__title'] :""  ?>">
            </div>
            <div class="projects__input">
                <input type="checkbox" id="tech1" name="tech1" value="HTML">
                <label for="tech1"> HTML</label><br>
                <input type="checkbox" id="tech2" name="tech2" value="CSS">
                <label for="tech2"> CSS</label><br>
                <input type="checkbox" id="tech3" name="tech3" value="JAVASCRIPT">
                <label for="tech3"> JavaScript</label><br><br>
            </div>
            <div class="blog__input">
                <label for="text">DESCRIPTION</label>
                <textarea name="text" cols="30"><?php echo (isset($detalhe['project__text'])) ? $detalhe['project__text'] :""  ?></textarea>
            </div>
            <div class="blog__input">
                <label for="images">COVER IMAGE</label>
                <input name="upload[]" type="file" multiple="multiple" value="<?php echo (isset($detalhe['project__imgs'])) ? $detalhe['project__imgs'] :""  ?>"/>
            </div>
            <div class="blog__input">
                <label for="images">MOCKUPS</label>
                <input name="upload[]" type="file" multiple="multiple" value="<?php echo (isset($detalhe['project__imgs'])) ? $detalhe['project__imgs'] :""  ?>"/>
            </div>
        </div>
        <button class="main__btn">SUBMIT</button>
        <input type="hidden" name="accao" value ="<?php echo $accao; ?>">
        <input type="hidden" name="id_project" value ="<?php echo $id; ?>">
    </form>

    <a href="index.php?area=admin-area" class="main__btn">GO BACK</a>
</div>