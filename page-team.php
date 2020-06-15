<?php 
$url = get_template_directory_uri(  ) . '/assets/images';

?>


<?php get_header(); ?>
 

      <div class="team-banner inner-page-bnr">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 m-auto">
                        <h2><?php wp_title(" "); ?> <span>Us</span></h2>
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
                        <h2><b><?php bloginfo('name');?></b> Team</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer to
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                  <?php get_template_part( 'partials/content', 'team' );?> 
                </div>
                <div class="row mt-xl-5 mt-lg-4 mt-md-3">
                    <div class="col-lg-6">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><img src="<?php echo  $url;?>/approach-img.png" alt=""><?php _e('APPROACH','techflyte');?></a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><img src="<?php echo $url;?>/start-img.png" alt=""><?php _e('METHODS','techflyte');?></a>
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

<?php get_footer(); ?>