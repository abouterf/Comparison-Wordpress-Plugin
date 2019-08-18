<?php
require 'app/autoload.php';
add_action('init', 'Init::add_image_size');
add_action('init', 'PostType::register_cars_post_type');
add_action('init', 'PostType::register_cars_taxonomy');
add_filter('manage_cars_posts_columns', 'PostType::default_columns_head');
add_action('manage_cars_posts_custom_column', 'PostType::default_columns_content', 10, 2);
add_action('init', 'PostType::remove_post_type_support');
add_action('wp_enqueue_scripts', 'Enqueue::comparison_scripts');
add_shortcode('comparison', 'Shortcode::compare_shortcode');
add_action('wp_ajax_ajax_handler', 'Ajax::ajax_handler');
add_action('wp_ajax_nopriv_ajax_handler', 'Ajax::ajax_handler');
add_action('wp_ajax_ajax_model_handler', 'Ajax::ajax_model_handler');
add_action('wp_ajax_nopriv_ajax_model_handler', 'Ajax::ajax_model_handler');
add_action('add_meta_boxes', ['MetaBox', 'add']);
add_action('save_post', ['MetaBox', '__save']);


