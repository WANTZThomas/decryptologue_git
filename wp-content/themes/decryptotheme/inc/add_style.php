<?php

add_action( 'wp_enqueue_scripts', 'ajout_scripts' );

function ajout_scripts() {
    
        // enregistrement d'un nouveau style
        wp_register_style( 'main_style', get_template_directory_uri() . '/styles/main.css' );
        
        // appel du style dans la page
        wp_enqueue_style( 'main_style' );

        // enregistrement et appel de bootstrap
        wp_register_style( 'bootstrap', CSS_URL.'/bootstrap.min.css' );
        wp_enqueue_style( 'bootstrap' );
    }