<?php

add_action( 'wp_enqueue_scripts', 'ajout_scripts' );

function ajout_scripts() {

        // enregistrement d'un nouveau style
        wp_register_style( 'main_style', get_template_directory_uri() . '/style.css' );
        // appel du style dans la page
        wp_enqueue_style( 'main_style' );
}