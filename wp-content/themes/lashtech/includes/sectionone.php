<div class="container-fluid">
    <div class="container text-center p-5">
<!-- Maecenas ex orci, aliquet sed nisl in, gravida pellentesque ligula. Maecenas accumsan tincidunt sem, at fermentum mi tristique gravida. Nunc eget orci urna. Donec pellentesque tincidunt nulla, non vestibulum magna. Etiam facilisis felis tellus, lacinia porttitor justo porta eu. Fusce condimentum, nisi in lobortis consectetur, diam ante maximus lacus, eget finibus turpis erat nec urna. Proin sodales sed mi vitae dignissim. Aliquam non magna purus. -->
    
        <h1 class=" p-md-0 p-lg-5 colorD">High Quality Lash Sets!</h1>
        <p class="mb-5 colorD fontSize18">Maecenas ex orci, aliquet sed nisl in, gravida pellentesque ligula.</p>
        <div class="row p-lg-3">
        <?php 
            $showPost = new WP_Query(array(
                'posts_per_page' => 3,
                'post_type' => 'product',
                'paged' => false,
                'order' => 'ASC'
            ));

            while($showPost->have_posts()){
                $showPost->the_post() ?>
                <div class="col-md-4 py-3">
                    <div class="container text-center">
                        <div class="container">
                            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url()?>" alt="Lashes" >
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