<?php

//notify admin
add_action('acf/save_post', 'my_save_post');

function my_save_post( $post_id ) {
	
	//for contact form notification
	if(($_POST['acf']['field_5afa839a70a82'] !='')) {
	
	# bail early if editing in admin
	if( is_admin() ) {		
		return;		
	}
		
	# vars
	$post = get_post( $post_id );	
	
	
	# get user registration details
	$name = get_the_title($post_id);
	$c_phone = get_field('c_phone', $post_id);
	$c_email = get_field('c_email', $post_id);
	$c_message = get_field('c_message', $post_id);

	
	# email data
	$to = get_field('contact_notification', 'option');
	
	if($to==""){
		$to = get_field('email', 'option');
	}
		
		
	$c_subject = get_field('subject', 'option');
		
	 $headers = 'From: '. $c_email . "\r\n" .
     'Reply-To: ' . $c_email . "\r\n";
	 
		
	$body .= 'From: '.$name. "\r\n";	
	$body .= 'Email: '.$c_email. "\r\n\r\n";
    $body .= 'Phone: '.$c_phone. "\r\n\r\n";
	$body .= ''.$c_message. "\r\n";		
		
	# send email

	wp_mail( $to, $c_subject, $body, $headers );

	
	}
	
}
//end notify admin

?>