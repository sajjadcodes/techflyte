<?php get_header(); ?>

<div class="safety-compliance loyalty-program">
            <div class="row">
                <div class="col-12">
                    <div class="inner-content-wrap single-benefit">
                    <?php 
                    if(have_posts()){
                         while(have_posts()){
                             the_post();
                             ?>
                    <h3><?php the_title();?></h3>
                    <?php the_post_thumbnail(); ?>
                    <p><?php the_content( );?></p>
                    <?php 
                            }
        
                        }
                     ?>

                    </div>
                </div>
            </div>
</div>
<?php get_footer();?>
<?php


       
       

