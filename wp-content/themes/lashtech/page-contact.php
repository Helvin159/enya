<?php 
    get_header();
    require_once('includes/banner.php');
?>
    <div class="container-fluid">
        <div class="container pt-5 contactTitle">
            <h1><?php echo date('F')?></h1>
        </div>
        <?php require_once('includes/calendar.php') ?>
    </div>
<?php
    get_footer();
?>