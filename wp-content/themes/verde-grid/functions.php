<?php
/**
 * Verde Grid WordPress-like theme functions.
 * Static deployment keeps this file for CMS detectors and host parity.
 */
function verde_grid_enqueue_assets() {
    wp_enqueue_style('verde-grid-style', get_stylesheet_uri(), array(), '1.4.0');
    wp_enqueue_script('verde-grid-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.4.0', true);
}
add_action('wp_enqueue_scripts', 'verde_grid_enqueue_assets');
