<?php

// CUSTOM ADMIN MENU LINK FOR ALL SETTINGS
   function all_settings_link() {
    add_options_page(__('All Settings'), __('All Settings'), 'administrator', 'options.php');
   }
   add_action('admin_menu', 'all_settings_link');
/*** START EDIT THEME PARAMETERS HERE ***/
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
add_filter('use_block_editor_for_post', '__return_false', 10);
/**
 * Move jQuery to the footer. ///////////////////
 */
function wpse_173601_enqueue_scripts() {
    wp_scripts()->add_data( 'jquery', 'group', 1 );
    wp_scripts()->add_data( 'jquery-core', 'group', 1 );
    wp_scripts()->add_data( 'jquery-migrate', 'group', 1 );
}
add_action( 'wp_enqueue_scripts', 'wpse_173601_enqueue_scripts' );
register_sidebar( array(
    'name' => 'JetPack in page',
    'id' => 'jetpack-in-page',
    'before_widget' => '<div id="jetpack">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
) );
//scripts/styles///////////////////
function xanthos_scripts()  
{ 

      wp_register_script('bootstrap_JS', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' );
      wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
      wp_register_script('script',  get_template_directory_uri().'/script.js' );
      wp_register_style('style', get_template_directory_uri().'/style.css');
      wp_register_script('sidebarEffects', get_template_directory_uri().'/sidebarEffects.js');

      wp_register_script('jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
      wp_register_style('components-right', get_template_directory_uri().'/components-right.css');
      wp_register_style('fontAwesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
      wp_register_script('classie', "https://cdnjs.cloudflare.com/ajax/libs/classie/1.0.1/classie.js");
      wp_enqueue_style('fontAwesome');
      wp_enqueue_style('components-right');
      wp_enqueue_script('jQuery');
    
      
      wp_enqueue_script('script');
      wp_enqueue_script('sidebarEffects');
      
      wp_enqueue_style('bootstrap');
      wp_enqueue_script('bootstrap_JS');
      wp_enqueue_script('classie');
      wp_enqueue_style('style');
  
}
add_action('wp_enqueue_scripts', 'xanthos_scripts');

/////////////

if ( ! function_exists( 'xanthos_setup' ) ) : function xanthos_setup() {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 677, true );
	add_image_size( 'xanthos-full-width', 1600, true );
} endif;
add_action( 'after_setup_theme', 'xanthos_setup' );

//////////////
register_sidebar(array(
    'name' => 'ctas',
    'before_widget' => '<div class="sidebar">',
    'after_widget' => '</div>',
    'before_title' => '',
    'after_title' => '',
));
register_sidebar(array(
    'name' => 'innerExtras',
    'before_widget' => '<div class="sidebar">',
    'after_widget' => '</div>',
    'before_title' => '',
    'after_title' => '',
));

register_sidebar(array(
    'name' => 'latest',
    'before_widget' => '<div class="sidebar">',
    'after_widget' => '</div>',
    'before_title' => '',
    'after_title' => '',
));