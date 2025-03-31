<?php
function astra_child_enqueue_styles() {
    wp_enqueue_style('astra-parent-theme', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('astra-child-theme', get_stylesheet_uri(), array('astra-parent-theme'));
}
add_action('wp_enqueue_scripts', 'astra_child_enqueue_styles');

require_once get_stylesheet_directory() . '/cpt-portfolio.php';
