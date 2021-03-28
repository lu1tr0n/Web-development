<?php
    register_sidebar(array(
        'name'  =>  'sidebar' ,
        'id'  =>  'sidebar_widgets' ,
        'before_widget'  =>  '<div id="%1$s">',
        'after_widget'  =>  '</div>' ,
        'before_title'  =>  '<h4>' ,
        'after_title'  => '</h4>' , )
    );

    function practice_theme_enqueue_styles() {
        wp_enqueue_style( 'style-main' , get_stylesheet_uri(), array() );
    }
    
    add_action( 'wp_enqueue_scripts', 'practice_theme_enqueue_styles' );
?>

