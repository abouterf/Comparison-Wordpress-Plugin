<?php

class Enqueue
{
    public static function comparison_scripts()
    {
        wp_enqueue_style('erka-select2-style', PLUGIN_URL . 'inc/css/select2.min.css');
        wp_enqueue_style('erka-bootstrap-style', PLUGIN_URL . 'inc/css/bootstrap.min.css');
        wp_enqueue_style('erka-bootstrap-rtl-style', PLUGIN_URL . 'inc/css/bootstrap-rtl.min.css');
        wp_enqueue_style('erka-fontawesome-style', PLUGIN_URL . 'inc/css/fontawesome.min.css');
        wp_enqueue_style('erka-style', PLUGIN_URL . 'assets/css/style.css');
        wp_enqueue_script('erka-script', PLUGIN_URL . 'assets/js/script.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('erka-ajax-script', PLUGIN_URL . 'assets/js/ajax.js', array('jquery'), '1.0.0', true);
        wp_localize_script('erka-ajax-script', 'MyAjax', array(
            'ajaxurl' => admin_url('admin-ajax.php'),
            'security' => wp_create_nonce('my-special-string')
        ));
        wp_enqueue_script('erka-popper-script', PLUGIN_URL . 'inc/js/popper.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('erka-bootstrap-script', PLUGIN_URL . 'inc/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('erka-select2-script', PLUGIN_URL . 'inc/js/select2.min.js', array('jquery'), '1.0.0', false);
        wp_enqueue_script('erka-lazyload-script', PLUGIN_URL . 'inc/js/lazyload.min.js', array('jquery'), '1.0.0', true);

    }
}