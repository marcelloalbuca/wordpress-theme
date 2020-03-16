<?php

//habilitando imagens destacadas
add_theme_support('post-thumbnails');
//add_image_size('thumb-custom', 232, 156, true);

if(!function_exists("easy_image_gallery_get_image_ids"))
{ // Fix for plugin whose authors are oblivious to the practice of maintaining function names through version updates.
 // this code is free to use and modify for any purpose as long as this notice is left intact.
 function easy_image_gallery_get_image_ids() {
  global $post;
  if( ! isset( $post->ID) ) return;
  $attachment_ids = get_post_meta( $post->ID, '_easy_image_gallery', true );
  $attachment_ids = explode( ',', $attachment_ids );
  return array_filter( $attachment_ids );
 }
}
