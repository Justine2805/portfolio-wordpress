<?php
function create_portfolio_cpt() {
    $args = array(
        'public' => true,
        'label'  => 'Portfolio',
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('category'),
        'rewrite' => array('slug' => 'portfolio'),
        'has_archive' => true,
        'show_in_rest' => true, // Pour l'éditeur Gutenberg
    );
    register_post_type('portfolio', $args);
}
add_action('init', 'create_portfolio_cpt');
