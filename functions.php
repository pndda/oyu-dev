<?php

// Add the support 

add_theme_support( 'title-tag' ); 
add_theme_support( 'post-thumbnails'); 
add_theme_support( 'post_formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] ); 
add_theme_support( 'html5' ); 
add_theme_support( 'automatic-feed-links'); 
add_theme_support( 'custom-background'); 
add_theme_support( 'custom-header'); 
add_theme_support( 'custom-logo'); 
add_theme_support( 'customize-selective-refresh-widgets'); 
add_theme_support( 'starter-content');



function mnrta_scripts() {

 wp_enqueue_style( 'bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'); 
 wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/assets/css/custom.css');  
 wp_enqueue_style( 'style', get_stylesheet_uri() );

 wp_enqueue_style( 'prefix-font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', true );
  
 wp_register_script( 'jQuery', '//code.jquery.com/jquery-3.5.1.slim.min.js');
 wp_enqueue_script('jQuery');
 wp_register_script( 'Popper', '//cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js');
 wp_enqueue_script('Popper');
 wp_enqueue_script('video-jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js');
 wp_enqueue_script( 'video', get_template_directory_uri() . '/assets/js/video.js', array(), true, true ); 
 

//  wp_enqueue_script( 'boostrap', get_template_directory_uri() . '/assets/js/bootstrap.js', null, null, true );
//  wp_enqueue_script( 'boostrap-min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), true, true );
 wp_enqueue_script('bootstrap-scripts', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js');

 wp_enqueue_script( 'main-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), true, true );


 
 

}
add_action( 'wp_enqueue_scripts', 'mnrta_scripts' );


// add menu 
function register_menu(){
    register_nav_menus(array (
            'main-menu' => __('Main Menu'), 
            'cart' => __('Cart'), 
            'footer-menu' => __('Footer Menu')
        )); 

}
add_action( 'init', 'register_menu' );

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );


add_filter( 'woocommerce_account_menu_items', 'bbloomer_rename_address_my_account', 999 );
 
function bbloomer_rename_address_my_account( $items ) {
$items['edit-address'] = 'Delivery Address';
return $items;
}

/*add_filter( 'woocommerce_account_menu_items', 'bbloomer_remove_address_my_account', 999 );
 
function bbloomer_remove_address_my_account( $items ) {
unset($items['edit-address']);
return $items;
}
*/



