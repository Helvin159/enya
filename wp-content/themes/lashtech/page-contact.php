<?php 
    get_header();
    require_once('includes/banner.php');
?>
    <div class="container-fluid">
        <div class="container pt-5">
            <h3><?php echo date('F')?></h3>
        </div>
        <?php require_once('includes/calendar.php') ?>
    </div>
<?php
    get_footer();
?>