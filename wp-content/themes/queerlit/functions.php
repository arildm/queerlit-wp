<?php
/* @see https://developer.wordpress.org/themes/advanced-topics/child-themes/ */

add_action('wp_enqueue_scripts', 'queerlit_enqueue_styles');
function queerlit_enqueue_styles() {
  wp_enqueue_style('queerlit-style', get_stylesheet_uri(),
    ['twenty-twenty-one-style'], wp_get_theme()->get('Version'));

  wp_enqueue_style( 'queerlit-external', 'https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300&display=swap', false );
}

/** @see get_custom_logo() */
add_filter('get_custom_logo', 'queerlit_get_custom_logo');
function queerlit_get_custom_logo($html) {
  $home_url = 'https://queerlit.dh.gu.se/';
  $html = preg_replace('/href="[^"]*"/', 'href="' . $home_url . '"', $html);
  if (strpos($html, 'href=') === FALSE) {
    $html = preg_replace('/<img [^>]*\/>/', '<a href="' . $home_url . '">\0</a>', $html);
  }
  return $html;
}
