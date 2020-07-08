
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
                        <div class="benefits-col">
                             <?php the_post_thumbnail('post-thumbnail', ['class' =>'img-fluid']);?>
                             <h6><?php the_title();?></h6>
                                 <?php if( have_rows('benefits_details') ){
                    ?>
                    

                <?php while( have_rows('benefits_details')){
                    the_row();
                    ?>
                    <ul>
                 <li><?php echo get_sub_field('bonus');?></li>
                </ul>
                    <?php
                    
                }

               }
                ?>
                <div>
                    <p><?php echo get_sub_field('extra_list');?></p>
                </div>

                                 
                               
                        
                         </div>
                    </div>
                    <?php 

                    }


                    ?>