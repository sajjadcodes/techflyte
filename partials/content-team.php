
 <?php 
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
                                <ul class="d-flex justify-content-center">
                                    <li><a href="#"><img src="images/facebook-img.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/instagram-img.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/twitter.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/linkedin.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                        <?php 
                    }


                    ?>