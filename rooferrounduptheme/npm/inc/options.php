<?php

//acf options panel

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Options',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'General Settings',
		'menu_title'	=> 'General Settings',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Banner Settings',
		'menu_title'	=> 'Banner Settings',
		'parent_slug'	=> 'theme-general-settings',
	));	
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Blog Banner',
		'menu_title'	=> 'Blog Banner',
		'parent_slug'	=> 'theme-general-settings',
	));		


	acf_add_options_sub_page(array(
		'page_title' 	=> 'Contact Settings',
		'menu_title'	=> 'Contact Settings',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Settings',
		'menu_title'	=> 'Footer Settings',
		'parent_slug'	=> 'theme-general-settings',
	));	

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Social Media',
		'menu_title'	=> 'Social Media',
		'parent_slug'	=> 'theme-general-settings',
	));
	

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Contact Form',
		'menu_title'	=> 'Contact Form',
		'parent_slug'	=> 'theme-general-settings',
	));	


	acf_add_options_sub_page(array(
		'page_title' 	=> 'Color Settings',
		'menu_title'	=> 'Color Settings',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyARhHVwWAThafW1eF_4w-cNeDJBT8OY2dM');
}

add_action('acf/init', 'my_acf_init');


?>