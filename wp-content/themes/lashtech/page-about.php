<?php 
    get_header();
    require_once('includes/banner.php');
?>
    <div class="container-fluid">
        <hr class="w-50 pt-5 mt-5">
        <div class="container px-5 text-center">
            <?php the_content()?>
        </div>
        <?php 
            require_once('includes/postimgwithcaptions.php')
        ?>
    </div>


    <?php
    require_once('includes/sectionone.php');
    get_footer();
?>