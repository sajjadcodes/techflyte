<?php 
get_header();

?>
        <!-- Header End -->
        <!-- Hero section -->
        <div class="banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-9 col-sm-10 col-11 m-auto">
                        <h1><?php the_field('home_header','option');?></h1>
                        <h2><?php the_field('home_subhead','option');?></h2>
                        <span><?php the_field('home_description','option');?></span>
                        <div class="bnr-btns">
                            <a href="#">CONTRACTORS</a>
                            <a href="#">Clients</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero section End -->
        <!-- Resume Section -->
        <div class="resume">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h3><?php the_field('resume_title', 'option');?></h3>
                        <p>
                           <?php the_field('resume_description','option'); ?>
                        </p>
                        <?php $images_url = get_template_directory_uri( ) . '/assets' ?>
                        <a href="<?php the_field('upload_file');?>">Upload Resume <img src="<?php echo $images_url;?>/images/upload-img.png" alt=""></a>
                    </div>
                    <div class="col-md-6">
                        <div class="resume-box">
                            <img class="img-fluid" src="<?php echo $images_url;?>/images/resume-img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Resume Section End -->
        <!-- Techflyte Section -->
        <div class="techflyte">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8 col-lg-9 col-md-11 col-sm-10 m-auto">
                        <div class="row">
                            <div class="col-12">
                                <h2> <?php the_field('tech_head','option');?></h2>
                                <p> <?php the_field('tech_description','option'); ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="techflyte-box">
                                    <img class="img-fluid m-auto d-block" src="images/benefits-img.png" alt="">
                                    <h4>BENEFITS</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
                                    </p>
                                    <a href="#">Read More...</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="techflyte-box">
                                    <img class="img-fluid m-auto d-block" src="images/safety-img.png" alt="">
                                    <h4>SAFETY</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
                                    </p>
                                    <a href="#">Read More...</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="techflyte-box">
                                    <img class="img-fluid m-auto d-block" src="images/comments-img.png" alt="">
                                    <h4>FAQ’S</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
                                    </p>
                                    <a href="#">Read More...</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <a class="contract-btn" href="#">CONTRACTORS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Techflyte Section End -->
        <!-- Footer Section -->
      
        <?php get_footer(); ?>


