<?php 
    get_header();
    require_once('includes/banner.php');
?>
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 d-none d-sm-none d-md-block d-lg-block">
                    <div class="container" style="background:linear-gradient(90deg, rgba(240,192,199,0.2), rgba(240,192,199,0.8)), url(<?php echo get_theme_file_uri('assets/img/6.jpg');?>); background-size:cover; background-position:center;height:80vh">
                        <!-- <img class="img-fluid py-5" src="<?php echo get_theme_file_uri('assets/img/6.jpg')?>" alt=""> -->
                    </div>

                </div>
                <div class="col-sm-6">
                    <?php require_once('includes/calendly.php') ?>
                </div>
            </div>
        </div>

    </div>
    <hr class="w-75">
    <div class="container-fluid">
        <?php require_once('includes/sectinthree.php'); ?>
    </div>
<?php
    get_footer();
?>