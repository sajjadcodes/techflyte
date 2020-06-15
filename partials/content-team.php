
 <?php 

$url = get_template_directory_uri(  ) . '/assets/images';



    $args= array(
        'post_type'         =>'team',
        'posts_per_page'    =>10,
    );

    $loop = new WP_Query($args);
    while($loop->have_posts()){
        $loop->the_post();
        ?>
        <div class="col-lg-4 col-sm-6">
        <div class="team-col">
            <img class="img-fluid" src="<?php the_post_thumbnail(); ?>
            <div class="team-caption text-center">
                <h5><?php the_title();?></h5>
                <span><?php the_excerpt(  );?></span>


                <?php if( have_rows('social_media_links') ){
                    ?>
                    <ul class="d-flex justify-content-center">

                <?php while( have_rows('social_media_links')){
                    the_row();

                    ?>

                    <li><a href="<?php echo get_sub_field('facebook_url');?>"><img src="<?php echo $url;?>/facebook-img.png" alt=""></a></li>
                    <li><a href="<?php echo get_sub_field('instagram_url');?>"><img src="<?php echo $url;?>/instagram-img.png" alt=""></a></li>
                    <li><a href="<?php echo get_sub_field('twitter_url');?>"><img src="<?php echo $url;?>/twitter.png" alt=""></a></li>
                    <li><a href="<?php echo get_sub_field('linkedin_url');?>"><img src="<?php echo $url;?>/linkedin.png" alt=""></a></li>
        
                    <?php 

                }

                }

                    ?>
                    
                </ul>
            
            </div>
        </div>
    </div>
    
        <?php 
        
                
            }


    ?>
