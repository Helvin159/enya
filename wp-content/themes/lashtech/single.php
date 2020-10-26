<?php 
    get_header();
    require_once('includes/banner.php')
?>

    <div class="container-fluid">
        <!-- <div class="container" style="background:url(<?php echo get_the_post_thumbnail_url()?>); height:150px;background-size:cover;background-repeat:no-repeat;background-position:center center;"></div> -->
        <div class="container py-5">
            <h1><?php the_title()?></h1>
        </div>

        <div class="container p-5">
            <p><?php the_content()?></p>
        </div>
    </div>










    <?php
    get_footer();
?>