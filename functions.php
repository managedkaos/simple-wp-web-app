<?php

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Simple Web App Jumbotron',
        'id' => 'simple-web-app-jumbotron',
        'description' => 'Widget for the home page jumbotron.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));
    register_sidebar(array(
        'name' => 'Simple Web App Homepage Left',
        'id' => 'simple-web-app-homepage-left',
        'description' => 'Widget for the home page left column.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
    register_sidebar(array(
        'name' => 'Simple Web App Homepage center',
        'id' => 'simple-web-app-homepage-center',
        'description' => 'Widget for the home page center column.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
    register_sidebar(array(
        'name' => 'Simple Web App Homepage Right',
        'id' => 'simple-web-app-homepage-Right',
        'description' => 'Widget for the home page right column.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}?>