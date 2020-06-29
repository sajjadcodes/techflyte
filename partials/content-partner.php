<?php 


    $args= array(
        'post_type'         =>'partner',
        'posts_per_page'    =>20,
    );

    $loop = new WP_Query($args);
    while($loop->have_posts()){
        $loop->the_post();
        ?>


            
            <div class="col-md-3 col-sm-4 col-6 text-center mt-sm-5 mt-4">
                <img class="img-fluid" src="images/client-logo-1.png" alt="">
                 <?php the_post_thumbnail('post-thumbnail',['class'=>'img-fluid']); ?>
            </div>
          

<?php 
    }
?>