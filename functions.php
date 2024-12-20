<?php


// Adds dynamic title tag support
function techsavvy_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'flex-width'  => true,   // Allow width to grow/shrink
        'flex-height' => true    // Allow height to grow/shrink
    ));
}
add_action('after_setup_theme', 'techsavvy_theme_support');

function techsavvy_enqueue_styles() {

    $version = wp_get_theme()->get( "Version");
    wp_enqueue_style('techsavvy-bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css", array(), '5.3.3', 'all');
    wp_enqueue_style('techsavvy-bootstrap-icons',"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css", array(), '1.11.3', 'all');

    wp_enqueue_style('techsavvy-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'techsavvy_enqueue_styles');

function techsavvy_enqueue_scripts() {

    wp_enqueue_script('techsavvy-script', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js", array(), '5.3.3', true);
}
add_action('wp_enqueue_scripts', 'techsavvy_enqueue_scripts');

////////////////////////////////////// menues ///////////////////////////////////////////


function techsavvy_menus() {
    $locations = array(
        'primary' => "Desktop primary",
        'footer' => "footer menu items"
    );
    register_nav_menus($locations);
}
add_action('init', 'techsavvy_menus');



class My_Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
    $classes = empty($item->classes) ? array() : (array) $item->classes;

    // Check if the menu item title is "Services" and add a custom class
    if ($item->title == 'Services') {
      $classes[] = 'menu-item-has-arrow';
    }

    $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));

    $output .= '<li id="menu-item-' . $item->ID . '" class="' . esc_attr($class_names) . '">';
    $output .= '<a href="' . esc_attr($item->url) . '">' . apply_filters('the_title', $item->title, $item->ID);

    // Append the icon HTML for the "Services" item
    if ($item->title == 'Services') {
      $output .= ' <i class="bi bi-caret-down-fill"></i>';
    }

    $output .= '</a>';
  }
}



////////////////////////////////////// customization /////////////////////////////////////////


function mytheme_customize_register($wp_customize) {
    // Add a Customizer Section for home page header
    $wp_customize->add_section('header_text_section', array(
        'title' => __('Homepage Text', 'mytheme'),
        'description' => __('Edit the text displayed on the homepage header image.'),
        'priority' => 30,

        'active_callback' => 'is_front_page'
    ));

    // Add a Setting
    $wp_customize->add_setting('header_text_setting', array(
        'default' => 'We focus on your technology so you can focus on your business.',
        'sanitize_callback' => 'sanitize_text_field', // Ensures clean input
    ));

    // Add a Control
    $wp_customize->add_control('header_text_control', array(
        'label' => __('Homepage Text', 'mytheme'),
        'section' => 'header_text_section',
        'settings' => 'header_text_setting',
        'type' => 'text',
  ));

 // Add a Setting for Sub-header Text
    $wp_customize->add_setting('subheader_text_setting', array(
        'default' => 'Local people. Local support.',
        'sanitize_callback' => 'sanitize_text_field', // Ensures clean input
    ));

    // Add a Control for Sub-header Text
    $wp_customize->add_control('subheader_text_control', array(
        'label' => __('Homepage Sub-header Text', 'mytheme'),
        'section' => 'header_text_section',
        'settings' => 'subheader_text_setting',
        'type' => 'text', // The input type
    ));
}
add_action('customize_register', 'mytheme_customize_register');