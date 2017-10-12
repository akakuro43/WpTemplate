<?php
  // 共通設定
  $site_name = get_bloginfo('name');
  $domain = "http://wp-original:8888/";
  $url = parse_url( $_SERVER["REQUEST_URI"] );
  $url = $url['path'];
  $meta_description_base = get_bloginfo('description');
  $meta_keywords_base = "";

  // タイトル設定
  global $meta_title;
  if( !isset($meta_title) && get_the_title() && get_the_title() !== '' && !is_archive()){
    $meta_title = get_the_title();
  }
  $meta_title = isset($meta_title) && $meta_title !== "" ? $meta_title . ' - ' . $site_name : $site_name;

  //ディスクリプション設定
  global $meta_description;
  if( get_the_ID() && get_field('meta-description', get_the_ID() ) && get_field('meta-description', get_the_ID() ) !== '' ){
    $meta_description = get_field('meta-description', get_the_ID());
  }
  $meta_description = isset($meta_description) ? $meta_description : $meta_description_base;

  // キーワード設定
  global $meta_keywords;
  $meta_keywords = isset($meta_keywords) ? $meta_keywords : $meta_keywords_base;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Language" content="ja">
  <title><?php echo $meta_title; ?></title>
  <meta name="description" content="<?php echo $meta_description; ?>">
  <meta name="keywords" content="<?php echo $meta_keywords; ?>">
  <meta property="og:title" content="<?php echo $meta_title; ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://<?php echo $domain; ?><?php echo $url; ?>">
  <meta property="og:description" content="<?php echo $meta_description; ?>">
  <meta property="og:site_name" content="<? echo $site_name; ?>">
  <meta property="og:locale" content="ja_JP">
  <meta property="og:image" content="<?php bloginfo('template_url'); ?>/screenshot.png">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, shrink-to-fit=no">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/common.css">
  <?php wp_head(); ?>
</head>
