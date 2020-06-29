<?php wp_head();?>
<?php $url = get_template_directory_uri(  ).'/assets/'; ?>
<?php $site_url=home_url();?>
<div class="wrapper">
        <!-- 404 -->
            <div class="page-404">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img class="img-fluid d-block m-auto" src=<?php echo $url; ?>'images/404-img.png' alt="">
                            <a class="btn-404" href="<?php $site_url;?>"><?php  _e('Home','techflyte');?></a>
                        </div>
                    </div>
                </div>
            </div>
        <!-- 404 End -->
    </div>

    <?php wp_footer(); ?>