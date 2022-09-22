 
<?php
 /* marufaaaa  */

 add_action( 'wp_enqueue_scripts',  'load_script');
 function load_script() {
   wp_enqueue_script('jquery');
   wp_enqueue_script('script_file',plugins_url('js/script.js',__FILE__),time());
 }
 
 