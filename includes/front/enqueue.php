<?php 



if(!function_exists('tech_enqueue_files')){

function tech_enqueue_files(){



    // url

    $url = get_theme_file_uri() .'/assets/';
    // register css
    
    wp_register_style('tech_bootstrap', $url.'css/bootstrap.min.css');
    wp_register_style('google_font','https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');




    // enqueue style
    wp_enqueue_style('tech_bootstrap');
    wp_enqueue_style('tech_style', $url . 'css/style.css');
    wp_enqueue_style('google_font');


    // enqueue script
    wp_enqueue_script('jquery');

    wp_enqueue_script('tech_boot_js',  $url . 'js/bootstrap.min.js');
    wp_enqueue_script('tech_popper', $url  . 'js/popper.min.js');
    wp_enqueue_script('tech_main_js',  $url . 'js/main.js');


}

}