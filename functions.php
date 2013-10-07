<?php
    #function my_function_admin_bar() { return false; }
    #add_filter('show_admin_bar' , 'my_function_admin_bar');

    function new_excerpt_more($more) { return '&#8230;'; }
    add_filter( 'excerpt_more', 'new_excerpt_more' );

    function custom_excerpt_length($length) { return 32; }
    add_filter('excerpt_length', 'custom_excerpt_length', 32 );

	register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<section class="widget" id="%2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));

    register_sidebar(array(
        'name' => 'Header',
        'id' => 'header',
        'before_widget' => '<section class="widget" id="%2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));
?>