<?php 



if(!function_exists('tech_enqueue_files')){

function tech_enqueue_files(){



    // url

    $url = get_theme_file_uri();
    // register css
    wp_register_style( 'test', $url.'/assets/test.css');




    // enqueue script

    wp_enqueue_style( 'test' );

}

}