
                    <?php 


                    $args= array(
                    'post_type'         =>'benefits',
                    'posts_per_page'    =>10,
                    );

                    $loop = new WP_Query($args);
                    while($loop->have_posts()){
                    $loop->the_post();
                    ?>
                    <div class="col-xl-4 col-sm-6">
                        <div class="benefits-col align-center">
                             <?php the_post_thumbnail('post-thumbnail', ['class' =>'img-fluid']);?>
                             <h6><?php the_title();?></h6>
                            <p><?php the_excerpt(  );?></p>
                                        
                            <a href="<?php the_permalink(  ); ?>"><?php _e('Read More','techflyte');?></a>

                         </div>
                    </div>
                    <?php 

                    }


                    ?>