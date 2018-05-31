<?php


define( 'ACF_LITE', true);
include_once('npm/advanced-custom-fields-pro/acf.php');
require get_template_directory() . '/npm/inc/options.php';
require get_template_directory() . '/npm/inc/acf_fields.php';
require get_template_directory() . '/npm/inc/post_types.php';
require get_template_directory() . '/npm/inc/notify.php';

require get_template_directory() . '/npm/advanced-custom-fields-font-awesome/acf-font-awesome.php';

require get_template_directory() . '/default-functions.php';
require get_template_directory() . '/npm/wp-pagenavi/wp-pagenavi.php';
//update api

require 'npm/plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'http://www.themeserver.nickponte.com/api/rooferrounduptheme.json',
	__FILE__,
	'rooferrounduptheme'
);
//end update api
//

/**
 * Remove Admin Menu Link to Theme Customizer
 */
add_action( 'admin_menu', function () {
    global $submenu;

    if ( isset( $submenu[ 'themes.php' ] ) ) {
        foreach ( $submenu[ 'themes.php' ] as $index => $menu_item ) {
            if ( in_array( 'Customize', $menu_item ) ) {
                unset( $submenu[ 'themes.php' ][ $index ] );
            }
        }
    }
});

function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}


add_filter('wp_list_categories', 'cat_count_inline');
function cat_count_inline($links) {
$links = str_replace('</a> (', '</a><span class="count">(', $links);
$links = str_replace(')', ')</span>', $links);
return $links;
}


function crunchify_disable_comment_url($fields) { 
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields','crunchify_disable_comment_url');


/**
 * Add automatic image sizes
 */
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'img_1200x1000', 1200, 1000, true ); //(cropped)
	add_image_size( 'img_1920x1100', 1920, 1100, true ); //(scaled)
	add_image_size( 'img_1000x1000', 1000, 1000, true ); //(scaled)
	add_image_size( 'img_400x400', 400, 400, true ); //(scaled)	
	add_image_size( 'logos', 200, 100, true ); //(scaled)	
}


//custom style
function generate_options_css() {
    $ss_dir = get_template_directory();
    ob_start(); // Capture all output into buffer
    require($ss_dir . '/npm/inc/style-color.php'); // Grab the custom-style.php file
    $css = ob_get_clean(); // Store output in a variable, then flush the buffer
    file_put_contents($ss_dir . '/npm/inc/style-color.css', $css, LOCK_EX); // Save it as a css file
}
add_action( 'acf/save_post', 'generate_options_css', 20 ); 
