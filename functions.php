<?php
function lorochulo_enqueune_links() {
    // Styling file
    wp_enqueue_style( 'style-css', get_stylesheet_directory_uri() .'/css/style.css', array(), null );

    // // Fonts
    // wp_enqueue_style( 'kalam-font', 'https://fonts.googleapis.com/css?family=Kalam', array(), null );

    // // Font Awesome CSS
    // wp_enqueue_style( 'font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css', array(), '6.5.2' );

    // // Swiper slider CSS
    // wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0' );

    // // Enqueue Swiper slider JS
    // wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true );

    // Enqueue custom slider  JavaScript file
    wp_enqueue_script('swiper-custom-js', get_stylesheet_directory_uri() . '/js/swiper.js', filemtime(get_stylesheet_directory() . '/js/swiper.js'), true);

    // // Enqueue Font Awesome JS
    // wp_enqueue_script( 'font-awesome-js', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/fontawesome.min.js', array(), '6.5.2', true );
    // wp_enqueue_script( 'font-awesome-solid-js', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/solid.min.js', array(), '6.5.2', true );

    // Enqueue JavaScript file
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', filemtime(get_stylesheet_directory() . '/js/custom.js'));

}

add_action( 'wp_enqueue_scripts', 'lorochulo_enqueune_links' );
