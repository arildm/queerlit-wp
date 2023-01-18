<?php
/* @see https://developer.wordpress.org/themes/advanced-topics/child-themes/ */

add_action('wp_enqueue_scripts', 'queerlit_enqueue_styles');
function queerlit_enqueue_styles() {
  wp_enqueue_style('queerlit-style', get_stylesheet_uri(),
    ['twenty-twenty-one-style'], wp_get_theme()->get('Version'));

  wp_enqueue_style( 'queerlit-external', 'https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300&display=swap', false );
}
