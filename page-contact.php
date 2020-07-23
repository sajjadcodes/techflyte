<? get_header(); ?>


 <div class="contact-banner inner-page-bnr">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 m-auto">
                        <h2><?php wp_title(" ");?><span><?php _e(' US','techflyte');?></span></h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero section End -->
        <!-- Contact section -->
        <div class="contact-us">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h3><a class="contact-dot-verfication" href="mailto:hr@techflyte.com?subject=DOT Verification!"><?php _e('DOT Verification','techflyte');?></a> | <span><a class="employ-ver" href="mailto:hr@techflyte.com?subject=Employment Verification!"><?php _e('Employment Verification','techflyte');?></a></span></h3>
                        <p>
                          <?php  _e('For any payroll related questions send us an email at','techflyte');?> <a href="mailto:payroll@techflyte.com?subject= Payroll Query!"><strong><?php _e('payroll@techflyte.com','techflyte');?></strong></a>
                            <br><br>
                       <?php _e('Looking to join the TechFlyte crew? email us for employment opportunities','techflyte');?> <a href="mailto:apply@techflyte.com?subject= Employment Query!"><strong><?php _e('apply@techflyte.com','techflyte'); ?></strong></a>
                            
                        </p>
                        <div class="contact-form">
                            <h4><?php _e('Get in touch','techflyte');?></h4>
                            <?php echo do_shortcode('[contact-form-7 id="1515" title="main_contact"]');?>
                        </div>    
                    </div>
                </div>
            </div>
        </div>


<?get_footer(); ?>

