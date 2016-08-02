<?php
/**
 * @package Make Child
 */

/**
 * The theme version.
 */
define( 'TTFMAKE_CHILD_VERSION', '1.1.0' );

/**
 * Turn off the parent theme styles.
 *
 * If you would like to use this child theme to style Make from scratch, rather
 * than simply overriding specific style rules, simply remove the '//' from the
 * 'add_filter' line below. This will tell the theme not to enqueue the parent
 * stylesheet along with the child one.
 */
//add_filter( 'make_enqueue_parent_stylesheet', '__return_false' );

/**
 * Add your custom theme functions here.
 */

function enqueue_child_scripts() {
  wp_enqueue_script(
    'alc-network-script',
    get_stylesheet_directory_uri() . '/js/alc-global.js',
    array( 'jquery' ),
    false,
    true
  );
}

add_action( 'wp_enqueue_scripts', 'enqueue_child_scripts' );


add_filter( 'make_template_content_single' , 'content_type' );

function alc_post_meta($post){
  $out = array();
  foreach (get_post_meta($post->ID) as $key => $value) {
    $out[$key] = (is_array($value)) ? implode(' ', $value) : $value ;
  }
  return $out;
}

function content_type($default) {
  $post_type = get_post_type();
  if ( $post_type == 'alc') {
    return $post_type;
  }
  return $default;
}
