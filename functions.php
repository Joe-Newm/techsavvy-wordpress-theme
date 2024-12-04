<?php
function my_custom_theme_enqueue_scripts() {
        // Enqueue main theme stylesheet (style.css)
        wp_enqueue_style('main-style', get_stylesheet_uri());

        // Enqueue Bootstrap 5 CSS (from CDN)
        wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css', array(), '5.3.0-alpha1', 'all');
    
        // Enqueue Bootstrap 5 JS (from CDN) with no jQuery dependency
        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', array(), '5.3.0-alpha1', true);
}
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_scripts');


function register_my_menus() {
    register_nav_menus(
      array(
        'main-menu' => __('Main Menu')
      )
    );
  }
  add_action('after_setup_theme', 'register_my_menus');

?>

