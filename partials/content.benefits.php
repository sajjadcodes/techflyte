
 <?php 


    $args= array(
        'post_type'         =>'benefits',
        'posts_per_page'    =>10,
    );

    $loop = new WP_Query($args);
    while($loop->have_posts()){
        $loop->the_post();
        ?>
        <div class="col-xl-4 col-sm-6">
          <div class="benefits-col">
            <img class="img-fluid" src="<?php the_post_thumbnail();?>" alt="">
                <h6><?php the_title();?></h6>
                                    
                    <?php if( have_rows('benefits_details') ){
                    ?>
                <ul>

                <?php while( have_rows('benefits_details')){
                    the_row();

                    ?>
                    <li><?php echo get_sub_field('bonus');?></li>
                    <li><?php echo get_sub_field('signature');?></li>
                    <li><?php echo get_sub_field('safety_award');?></li>
                </ul>
            </div>
        </div>
        <?php 

    }
}
        ?>