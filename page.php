
<?php get_header(); ?>

<?php ?>
            <div class="general-page">
              <div class="container-fluid">
                <div class="row">
                 <div class="col-12">

                    <?php 
                    if(have_posts()){

                        while(have_posts()){
                                the_post();
                                ?>
                            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

                            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                            <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
                                <div class="entry-content">
                                  
                                    <?php the_content(); ?>
                                
                                      <?php
                                    wp_link_pages(
                                        array(
                                            'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
                                            'after'  => '</div>',
                                        )
                                    );
                                    ?>

                                </div><!-- .entry-content -->
                                <?php 
                                }
                            }
                            ?>
                            
                             
                               
                            </div>
                        </div>    
                    </div>
              </div>
     


<?php get_footer();?>
