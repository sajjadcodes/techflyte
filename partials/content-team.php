

<?php 
$url = get_template_directory_uri(  ) . '/assets/images';



    $args= array(
        'post_type'         =>'team',
        'posts_per_page'    =>10,
    );

    $loop = new WP_Query($args);
    while($loop->have_posts()){
        $loop->the_post();
        ?>
        <div class="col-lg-4 col-sm-6">
        <div class="team-col">
            <?php the_post_thumbnail('post-thumbnail',['class'=>'img-fluid']); ?>
            <div class="team-caption text-center">
                <h5><?php the_title();?></h5>
                <span><?php the_excerpt(  );?></span>

                </ul>
            
            </div>
        </div>
    </div>
    
        <?php 
        
                
            }


    ?>
