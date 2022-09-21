<?php


add_action('wp_enqueue_scripts', 'load_assets');

function load_assets(){
    wp_enqueue_style(
        'contact-form-style',
        plugin_dir_url( __FILE__ ) . './css/contact-form-style.css',
        array(),
        1,
        'all'
    );
}