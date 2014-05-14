<?php

// Register widget areas for the home page
if (function_exists('register_sidebar')) {

    // Jumbotron
    register_sidebar(array(
        'name' => 'Simple Web App Jumbotron',
        'id' => 'simple-web-app-jumbotron',
        'description' => 'Widget for the home page jumbotron.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h1 class="text-center">',
        'after_title' => '</h1>'
    ));

    // Call to Action
    register_sidebar(array(
        'name' => 'Simple Web App Call to Action',
        'id' => 'simple-web-app-call-to-action',
        'description' => 'Widget for the call to action.',
        'before_widget' => '<div id="%1$s" class="%2$s panel-title panel-heading">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));

    // Home page left
    register_sidebar(array(
        'name' => 'Simple Web App Homepage Left',
        'id' => 'simple-web-app-homepage-left',
        'description' => 'Widget for the home page left column.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="text-center">',
        'after_title' => '</h2>'
    ));

    // Home page center
    register_sidebar(array(
        'name' => 'Simple Web App Homepage center',
        'id' => 'simple-web-app-homepage-center',
        'description' => 'Widget for the home page center column.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="text-center">',
        'after_title' => '</h2>'
    ));

    // Home page right
    register_sidebar(array(
        'name' => 'Simple Web App Homepage Right',
        'id' => 'simple-web-app-homepage-Right',
        'description' => 'Widget for the home page right column.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="text-center">',
        'after_title' => '</h2>'
    ));

    // Footer
    register_sidebar(array(
        'name' => 'Simple Web App Footer',
        'id' => 'simple-web-app-footer',
        'description' => 'Widget for the footer.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="text-center">',
        'after_title' => '</h2>'
    ));
} // End Register widget areas for the home page

// Register menu areas for the home page
function register_simple_web_app_menu() {
  register_nav_menu('simple-web-app-menu',__( 'Home Page Menu' ));
}
add_action( 'init', 'register_simple_web_app_menu' );


?>