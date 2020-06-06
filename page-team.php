
<?php /* Template Name: team */ ?>


<?php get_header(); ?>
  <!-- Hero section -->
        <div class="team-banner inner-page-bnr">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 m-auto">
                        <h2>About <span>Us</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero section End -->

         <!-- Team section -->
        <div class="our-team">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-11 col-lg-12 m-auto text-center">
                        <h2><b><?php bloginfo( 'name' )?></b> <?php single_post_title(); ?></h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer to
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <?php
                   $team_img_url = get_template_directory_uri(  ) . "/assets";
                   ?>


         
                            
                     
                    <div class="col-lg-4 col-sm-6">
                        <div class="team-col">

                        <?php 
                          $args = array(  
                            'post_type' => 'team',
                            'posts_per_page' => '8', 
                            'orderby' => 'title', 
                            'order' => 'ASC', 
                        );

                        $loop = new WP_Query( $args ); 
                            
                        while ( $loop->have_posts() ) : $loop->the_post(); 
                        ?>
                            <!-- <img class="img-fluid" src="<?php echo $team_img_url;?>/images/team-1.png" alt=""> -->
                            <?php the_post_thumbnail( 'full','' );?>
                            <div class="team-caption text-center">
                                <h5><?php the_title(); ?></h5>
                                <span><?php the_excerpt();?></span>
                                <ul class="d-flex justify-content-center">
                                    <li><a href="#"><img src="<?php echo $team_img_url; ?>/images/facebook-img.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo $team_img_url; ?>/images/instagram-img.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo $team_img_url; ?>/images/twitter.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo $team_img_url; ?>/images/linkedin.png" alt=""></a></li>
                                </ul>
                            
                            </div>
                        
                                <?php 
                       endwhile;

                        wp_reset_postdata(); 

                
                                ?>
                        
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-sm-6">
                        <div class="team-col">
                            <img class="img-fluid" src="images/team-2.png" alt="">
                            <div class="team-caption text-center">
                                <h5>John Doe</h5>
                                <span>I am Ceo</span>
                                <ul class="d-flex justify-content-center">
                                    <li><a href="#"><img src="images/facebook-img.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/instagram-img.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/twitter.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/linkedin.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="team-col">
                            <img class="img-fluid" src="images/team-3.png" alt="">
                            <div class="team-caption text-center">
                                <h5>John Doe</h5>
                                <span>I am Ceo</span>
                                <ul class="d-flex justify-content-center">
                                    <li><a href="#"><img src="images/facebook-img.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/instagram-img.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/twitter.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/linkedin.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="team-col">
                            <img class="img-fluid" src="images/team-1.png" alt="">
                            <div class="team-caption text-center">
                                <h5>John Doe</h5>
                                <span>I am Ceo</span>
                                <ul class="d-flex justify-content-center">
                                    <li><a href="#"><img src="images/facebook-img.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/instagram-img.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/twitter.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/linkedin.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="team-col">
                            <img class="img-fluid" src="images/team-1.png" alt="">
                            <div class="team-caption text-center">
                                <h5>John Doe</h5>
                                <span>I am Ceo</span>
                                <ul class="d-flex justify-content-center">
                                    <li><a href="#"><img src="images/facebook-img.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/instagram-img.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/twitter.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/linkedin.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="team-col">
                            <img class="img-fluid" src="images/team-2.png" alt="">
                            <div class="team-caption text-center">
                                <h5>John Doe</h5>
                                <span>I am Ceo</span>
                                <ul class="d-flex justify-content-center">
                                    <li><a href="#"><img src="images/facebook-img.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/instagram-img.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/twitter.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/linkedin.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="row mt-xl-5 mt-lg-4 mt-md-3">
                    <div class="col-lg-6">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><img src="<?php echo $team_img_url;?>/images/approach-img.png" alt="">APPROACH</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><img src="<?php echo $team_img_url;?>/images/start-img.png" alt="">METHODS</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <p>
                                    orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                <p>
                                    orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <p>
                                    orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team-detail">
                            <h6>
                                We bring a crafted and inspired approach to every
                                project we work on.
                            </h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team section End -->




<h1>Template: page-team.php</h1>
<?php get_footer(); ?>

