 <?php get_header(); ?>
 
 <div class="ourPartner-banner inner-page-bnr">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 m-auto">
                        <h2><span>Our Partners</span></h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="our-partner loyalty-program">
            <div class="row">
                <div class="col-12">
                    <div class="inner-content-wrap">
                        <h2><?php _e('Our Partners','techflyte');?></h2>
                        <p>
                            <?php echo get_theme_mod('partner_description'); ?>
                        </p>
                     <div class="row justify-content-center align-items-center">
                            <?php get_template_part('partials/content','partner');?>
                        </div> 

                        
                    </div>
                </div>
            </div>
        </div>


        <?php get_footer(); ?>
