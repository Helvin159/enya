<?php 
    get_header();
    require_once('includes/banner.php');
?>
    <div class="container-fluid py-5" style="background:linear-gradient(0deg, rgba(255,206,212,0.7), rgba(255,206,212,1)), url(<?php echo get_theme_file_uri('assets/img/6.jpg');?>); background-size:cover; background-position:center;min-height:100vh">
        <div class="container" >
            <div class="row">
                <div class="col-sm-6 d-none d-sm-none d-md-block d-lg-block py-5">
                    <img class="img-fluid mt-5" src="<?php echo get_theme_file_uri('assets/img/ai2.png')?>" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="calendlyContainer">
                        <?php require_once('includes/calendly.php') ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <?php require_once('includes/sectinthree.php'); ?>
    </div>
<?php
    get_footer();
?>