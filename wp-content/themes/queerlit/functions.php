<?php

add_action('wp_enqueue_scripts', 'queerlit_enqueue_styles');
function queerlit_enqueue_styles() {
  wp_enqueue_style('queerlit-style', get_stylesheet_uri(),
    ['twenty-twenty-one-style'], wp_get_theme()->get('Version'));
}
