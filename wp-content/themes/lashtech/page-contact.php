<?php 
    get_header();
    require_once('includes/banner.php');
?>
    <div class="container-fluid">
        <div class="container pt-5 contactTitle">
            <h1>Schedule A Session</h1>
            <!-- <h1>Book A Session</h1> -->
        </div>
        <?php require_once('includes/jsCal.php') ?>
    </div>
<?php
    get_footer();
?>