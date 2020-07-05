<?php 

    function sam_script_enqueue() {

        wp_enqueue_style( 'customstyle', get_template_directory_uri() . 'css/main.css', array() , '1.0.0' , 'all' );
        wp_enqueue_script( 'coustomjs',  get_template_directory_uri() . 'js/main.js', array(), true );
    }

    add_action( 'wp_enqueue_scripts', 'sam_script_enqueue' );


?>