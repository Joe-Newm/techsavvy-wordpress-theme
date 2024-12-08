<?php

function techsavvy_enqueue_styles() {

    $version = wp_get_theme()->get( "Version");
    wp_enqueue_style('techsavvy-bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css", array(), '5.3.3', 'all');
    wp_enqueue_style('techsavvy-bootstrap-icons',"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css", array(), '1.11.3', 'all');

    wp_enqueue_style('techsavvy-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'techsavvy_enqueue_styles');

function techsavvy_enqueue_scripts() {

    wp_enqueue_script('techsavvy-script', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js", array(), '5.3.3', 'all');
}
add_action('wp_enqueue_scripts', 'techsavvy_enqueue_scripts');
?>

