 
<?php
 /* marufaaaa  */

 add_action( 'wp_enqueue_scripts',  'load_script');
 add_action ( 'rest_api_init', "register_rest_api");
 
 function register_rest_api() {
    register_rest_route( 'form/v1','submit',array(
            'methods'=> 'POST',
            'callback'=>  'my_awesome_func'
    ));
 }

 function load_script() {
   wp_enqueue_script('jquery');
   wp_enqueue_script('script_file',plugins_url('js/script.js',__FILE__),time());
 }
 
 