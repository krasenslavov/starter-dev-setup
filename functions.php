<?php

define('DEV_MODE', true);

add_action('wp_enqueue_scripts', function() {
  if (DEV_MODE) {
    wp_register_script('unique_name', get_template_directory_uri() . 'assets/js/init.js', array('jquery'), '1.0', true);
    wp_register_style('unique_name', get_template_directory_uri() . 'assets/css/uuid.css', array(), '1.0', 'all');
  } else {
    wp_register_script('unique_name', get_template_directory_uri() . 'build/js/uuid.min.js', array('jquery'), '1.0', true);
    wp_register_style('unique_name', get_template_directory_uri() . 'build/css/uuid.min.css', array(), '1.0', 'all');
  }
});
