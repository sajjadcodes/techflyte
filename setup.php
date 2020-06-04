<?php 


function tech_setup_theme(){

    // custom logo feature
    
    add_theme_support('custom-logo');
    


    register_nav_menus(array(

        'primary'         => 'Main Primary Menu for Techflyte',

    ));



}