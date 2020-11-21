<?php 
    get_header();
    require_once('includes/banner.php');
?>


                    <?php require('includes/svgImage.php')?>


<div class="container-fluid">
    
    <div class="container py-5">
        <h1>What I've Been Up To</h1>

    </div>
        <hr class="w-75 ">
    <div class="container py-5">
        <div class="row">
        <?php 
            while(have_posts()){
                the_post(); ?>
                <div class="col-md-4 py-3">
                    <div class="container text-center">
                        <div class="container">
                            <img class="img-fluid" src="<?php the_post_thumbnail_url('SmallLandscape') ?>" alt="Lashes" >
                        </div>
                        <hr>
                        <a class="colorD fontSize20" href="<?php the_permalink()?>"><?php the_title()?></a>
                    </div>
                </div>
            <?php }
            wp_reset_postdata();
        ?>
        </div>  
    </div>
</div>






    <?php
    get_footer();
?>