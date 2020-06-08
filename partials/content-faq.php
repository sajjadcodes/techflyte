
<?php 


                $args= array(
                'post_type'         =>'faq',
                'posts_per_page'    =>10,
                );

                $loop = new WP_Query($args);
                  
                while($loop->have_posts()){
                    ?>
                 
                    <div class="col-md-6"> 
                   
                    <?php 
                $loop->the_post();
                ?>



              
                    
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#<?php echo $post->post_name;?>" aria-expanded="true" aria-controls="collapseOne">
                                        <?php the_title(); ?>
                                <div class="controler-signs">
                                  <span></span>
                                    <span></span>
                                </div>
                                    </button>
                                </h2>
                            </div>
                        <div id="<?php echo $post->post_name;?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <?php the_content();?>
                </div>
            </div>
    </div>
</div>
<?php 

                }
            
?>




