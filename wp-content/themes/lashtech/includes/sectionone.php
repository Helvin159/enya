<div class="container-fluid sectionOne">
    <div class="container text-center p-5">
        <h1 class=" p-md-0 p-lg-5 colorD">High Quality Lash Sets!</h1>
        <p class="mb-5 colorD fontSize18">Maecenas ex orci, aliquet sed nisl in, gravida pellentesque ligula.</p>
        <div class="row p-lg-3">
        <?php 
            $showPost = new WP_Query(array(
                'posts_per_page' => 3,
                'post_type' => 'post',
                'paged' => false,
                'order' => 'ASC'
            ));

            while($showPost->have_posts()){
                $showPost->the_post(); ?>
                <div class="col-md-4 py-3">
                    <div class="container text-center">
                        <div class="container">
                            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url('SmallLandscape') ?>" alt="Lashes" >
                        </div>
                        <hr>
                        <a class="colorD fontSize20" href="<?php the_permalink()?>"><?php the_title()?></a>
                    </div>
                
                </div>
            <?php }
            ?>
        </div>
    </div>
    
</div>