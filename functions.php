<?php

if (function_exists('acf_add_options_page')) {
  acf_add_options_page();
}

//** *Enable upload for webp image files.*/
function webp_upload_mimes($existing_mimes) {
  $existing_mimes['webp'] = 'image/webp';
  return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');

add_theme_support( 'post-thumbnails' ); 

// remove default guttenberg block editor stylesheet
//  https://wpassist.me/how-to-remove-block-library-css-from-wordpress/
function wpassist_remove_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
} 
add_action( 'wp_enqueue_scripts', 'wpassist_remove_block_library_css' );

wp_enqueue_style( 'site_main_css', get_template_directory_uri() . '/css/build/main.min.css' );
wp_enqueue_script (  'site_main_js' ,  get_template_directory_uri ( )  .  '/js/build/app.min.js'  ,  null  ,  null  ,  true  ) ;


// // include the css file
// $cssFilePath = glob( get_template_directory() . '/css/build/main.min.*' );
// $cssFileURI = get_template_directory_uri() . '/css/build/' . basename($cssFilePath[0]);
// wp_enqueue_style( 'site_main_css', $cssFileURI );
// // include the javascript file
// $jsFilePath = glob( get_template_directory() . '/js/build/app.min.*.js' );
// $jsFileURI = get_template_directory_uri() . '/js/build/' . basename($jsFilePath[0]);
// wp_enqueue_script( 'site_main_js', $jsFileURI , null , null , true );
