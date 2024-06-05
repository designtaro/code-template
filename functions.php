<?php
function minimal_theme_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // Add support for two custom navigation menus.
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'minimal-theme'),
        'footer'  => __('Footer Menu', 'minimal-theme'),
    ));
}
add_action('after_setup_theme', 'minimal_theme_setup');

function minimal_theme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Primary Sidebar', 'minimal-theme'),
        'id'            => 'primary-sidebar',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'minimal-theme'),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'minimal_theme_widgets_init');
?>
