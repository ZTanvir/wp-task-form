<?php

function my_project_updated_send_email(){

$to = get_option( 'admin_email' );
echo $to;
$subject = 'The subject';
$body = 'content';
$headers = array('Content-Type: text/html; charset=UTF-8');

wp_mail( $to, $subject, $body, $headers );
}

add_action( 'init','my_project_updated_send_email' );

?>
