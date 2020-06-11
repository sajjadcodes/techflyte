<?php get_header();?>
<?php $img_url = get_template_directory_uri(  ) . "/assets"; ?>
   <!-- Hero section -->
        <div class="contractor-banner inner-page-bnr">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 m-auto">
                        <h2><span><?php wp_title(" ");?></span></h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero section End -->
        <!-- Contractors section -->
        <div class="contractors">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="sidebar-bnr">
                        <img src="<?php echo $img_url?>/images/sidebar-bnr.png" alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="contractor-caption-box">
                        <h3><?php wp_title(" ");?></h3>
                        <p>
                            Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud
                        </p>
                        <p>
                            Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                        </p>
                        <a href="#">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contractors section End -->
        <!-- Information section -->
        <div class="information">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h6><?php _e('INFORMATION','techfyte');?></h6>
                        <h2>
                            <?php _e('FREQUENTLY ASKED QUESTIONS','techflyte');?>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="accordion row" id="accordionExample">
                    <?php get_template_part( 'partials/content','faq');?>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
        <!-- Information section End -->


<?php get_footer();?>