<div class="container-fluid banner" <?php 
if($_SERVER['SERVER_NAME'] == 'enya.local'){
    echo 'style="background:url('.get_theme_file_uri('assets/img/4.jpg').'),linear-gradient(90deg, rgba(250, 218, 221, 1), rgba(250, 218, 221, 1))"'; 
    } ?> >
    <div class=" bannerText">
        <?php if($_SERVER['REQUEST_URI'] == '/blog/'){
            echo '<h1>My Blog</h1>';
        }else{ ?>
        <h1><?php the_title(); ?></h1>
    <?php } ?>
    </div>
    
</div>