<?php 
$url = get_template_directory_uri(  ) . '/assets/images';

?>


<?php get_header(); ?>

      <div class="team-banner inner-page-bnr">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 m-auto">
                        <h2><?php _e('Our'); ?> <span><?php _e('Team','techflyte'); ?></span></h2>
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
                        <h2><?php _e('Team','techflyte');?><b><?php bloginfo('name');?></b></h2>
                        <p>
                        <?php echo get_theme_mod('team_description');?>
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                  <?php get_template_part('partials/content','team');?>
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
                                   <?php echo get_theme_mod('approach_description'); ?>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <p>
                                <?php echo get_theme_mod('method_description'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team-detail">
                            <h6>
                        
                                <?php echo get_theme_mod('team_secondary_title');?>
                            </h6>
                            <p>
                             <?php   echo get_theme_mod('team_secondary_description');?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>