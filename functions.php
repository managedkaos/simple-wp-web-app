<?php

// Register widget areas for the home page
if (function_exists('register_sidebar')) {

    // Jumbotron
    register_sidebar(array(
        'name' => 'Jumbotron',
        'id' => 'simple-web-app-jumbotron',
        'description' => 'Widget for the home page jumbotron.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h1 class="text-center">',
        'after_title' => '</h1>'
    ));

    // Call to Action
    register_sidebar(array(
        'name' => 'Call to Action',
        'id' => 'simple-web-app-call-to-action',
        'description' => 'Widget for the call to action.',
        'before_widget' => '<div id="%1$s" class="%2$s panel-title panel-heading">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));

    // Home page left
    register_sidebar(array(
        'name' => 'Homepage Left Icon',
        'id' => 'simple-web-app-homepage-left-icon',
        'description' => 'Widget for the home page left icon.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="text-center">',
        'after_title' => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Homepage Left',
        'id' => 'simple-web-app-homepage-left',
        'description' => 'Widget for the home page left column.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="text-center">',
        'after_title' => '</h2>'
    ));

    // Home page center
    register_sidebar(array(
        'name' => 'Homepage Center Icon',
        'id' => 'simple-web-app-homepage-center-icon',
        'description' => 'Widget for the home page center icon.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="text-center">',
        'after_title' => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Homepage Center',
        'id' => 'simple-web-app-homepage-center',
        'description' => 'Widget for the home page center column.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="text-center">',
        'after_title' => '</h2>'
    ));

    // Home page right
    register_sidebar(array(
        'name' => 'Homepage Right Icon',
        'id' => 'simple-web-app-homepage-right-icon',
        'description' => 'Widget for the home page right icon.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="text-center">',
        'after_title' => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Homepage Right',
        'id' => 'simple-web-app-homepage-Right',
        'description' => 'Widget for the home page right column.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="text-center">',
        'after_title' => '</h2>'
    ));

    // Footer Left
    register_sidebar(array(
        'name' => 'Footer Left',
        'id' => 'simple-web-app-footer-left',
        'description' => 'Widget for the footer left.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="pull-left">',
        'after_title' => '</h4>'
    ));

    // Footer Center
    register_sidebar(array(
        'name' => 'Footer Center',
        'id' => 'simple-web-app-footer-center',
        'description' => 'Widget for the footer center.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    // Footer Left
    register_sidebar(array(
        'name' => 'Footer Right',
        'id' => 'simple-web-app-footer-right',
        'description' => 'Widget for the footer right.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="pull-right">',
        'after_title' => '</h4>'
    ));
} // End Register widget areas for the home page
// Register menu areas for the home page
function register_simple_web_app_menu() {
    register_nav_menu('simple-web-app-menu', __('Home Page Menu'));
}

add_action('init', 'register_simple_web_app_menu');

// Remove widgets that get in the way for this theme
function unregister_default_widgets() {
    unregister_widget('WP_Widget_Pages');
    unregister_widget('WP_Widget_Calendar');
    unregister_widget('WP_Widget_Archives');
    unregister_widget('WP_Widget_Links');
    unregister_widget('WP_Widget_Meta');
    unregister_widget('WP_Widget_Search');
    unregister_widget('WP_Widget_Categories');
    unregister_widget('WP_Widget_Recent_Posts');
    unregister_widget('WP_Widget_Recent_Comments');
    unregister_widget('WP_Widget_RSS');
    unregister_widget('WP_Widget_Tag_Cloud');
    unregister_widget('WP_Nav_Menu_Widget');
    unregister_widget('Twenty_Eleven_Ephemera_Widget');
}

add_action('widgets_init', 'unregister_default_widgets', 11);
?>
