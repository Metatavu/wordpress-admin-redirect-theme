<?php
  add_action('after_setup_theme', function () {	
    add_theme_support( 'post-thumbnails' );
	  set_post_thumbnail_size( 1200, 9999 );
  });
?>