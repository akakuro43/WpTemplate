<?php

function includePhpFunc($params = array()) {
  extract(shortcode_atts(array(
    'file' => 'default'
  ), $params));
  ob_start();
  include("../asset/php/$file.php");
  return ob_get_clean();
}
add_shortcode("includePhp","includePhpFunc");

add_theme_support('post-thumbnails');

global $wp_rewrite;
$wp_rewrite->flush_rules();

// meta
function echo_meta($name){
  global $post;

  switch($name){
    case 'title':
      if(is_home()){
        $title = get_bloginfo('name');
      }else{
        $title = get_post_meta($post->ID, 'meta_title', true);

        if(empty($title)){
          $title = wp_title('', false);
        }

        $title .= ' | ' . get_bloginfo('name');
      }

      echo $title;

      break;
    case 'description':
      if(is_home()){
        $description = get_bloginfo('description');
      }else if(get_post_type() == 'project' && is_archive()){
        $description ="アーカイブ記事のデスクリプション";
      }else if(get_post_type() == 'news' && is_archive()){
        $description ="アーカイブ記事のデスクリプション";
      }else if(is_single()){
        $description = get_post_meta($post->ID, 'meta_title', true);
      }else{
        $description = get_post_meta($post->ID, 'meta_description', true);

        if(empty($description)){
          $description = get_bloginfo('description');
        }
      }

      echo $description;

      break;
    case 'og_url':
      if(is_home()){
        $og_url = 'https://www.don-guri.com/';
      }else{
        $og_url = get_permalink($post->id);
      }

      echo $og_url;

      break;
    case 'og_image':
      if(get_post_type() == 'project' && is_single()){
        $og_image = the_post_thumbnail_url('full');

      }else{
        $og_image = bloginfo('template_url').'/assets/images/og_image.png';
      }

      echo $og_image;

      break;
  }
}

?>
