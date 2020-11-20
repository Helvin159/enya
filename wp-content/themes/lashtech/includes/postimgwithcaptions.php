<?php if(get_field('image_one')){ ?>
    <div class="container">
        <div class="row py-5">
            <?php 
            if(get_field('image_one')){?>
                <div class="col-sm-6">
                    <div class="container p-5">
                        <img class="img-fluid" src="<?php echo get_field('image_one')?>" alt="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="container p-5"> 
                    <h3><?php echo get_field('image_one_title'); ?> </h3>
                        <p><?php echo get_field('first_image_caption'); ?></p>
                    </div>
                </div>
            <?php }

            if(get_field('image_two')){?>
            <div class="col-sm-6">
                <div class="container p-5"> 
                    <h3><?php echo get_field('image_two_title'); ?> </h3>
                    <p><?php echo get_field('second_image_caption'); ?></p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="container p-5">
                    <img class="img-fluid" src="<?php echo get_field('image_two')?>" alt="">
                </div>
            </div>
            <?php }

            if(get_field('image_three')){?>
            <div class="col-sm-6">
                <div class="container p-5">
                    <img     class="img-fluid" src="<?php echo get_field('image_three')?>" alt="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="container p-5"> 
                    <h3><?php echo get_field('image_three_title'); ?> </h3>
                    <p><?php echo get_field('third_image_caption'); ?></p>
                </div>
            </div>
            <?php }

            if(get_field('image_four')){?>
            <div class="col-sm-6">
                <div class="container p-5"> 
                    <h3><?php echo get_field('image_four_title'); ?> </h3>
                    <p><?php echo get_field('fourth_image_caption'); ?></p>
                </div>
            <div class="col-sm-6">
                <div class="container p-5">
                    <img class="img-fluid" src="<?php echo get_field('image_four')?>" alt="">
                </div>
            <?php }

            if(get_field('image_five')){?>
            <div class="col-sm-6">
                <div class="container p-5">
                    <img class="img-fluid" src="<?php echo get_field('image_five')?>" alt="">
                </div>
            <div class="col-sm-6">
                <div class="container p-5"> 
                    <h3><?php echo get_field('image_five_title'); ?> </h3>
                    <p><?php echo get_field('fifth_image_caption'); ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>