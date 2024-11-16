<?php
// Register Custom Post Type
function create_deer_tests_cpt() {
    $labels = array(
        'name' => 'Deer Tests',
        'singular_name' => 'Deer Test',
        'menu_name' => 'Deer Tests',
        'name_admin_bar' => 'Deer Test',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_in_menu' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('deer_tests', $args);
}
add_action('init', 'create_deer_tests_cpt');
