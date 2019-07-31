<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Language" content="ja">
  <title><?php echo_meta('title'); ?></title>
  <meta name="description" content="<?php echo_meta('description'); ?>">
  <meta property="og:title" content="<?php echo_meta('title'); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo_meta('og_url'); ?>">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="<?php echo_meta('description'); ?>">
  <meta property="og:locale" content="ja_JP">
  <meta property="og:image" content="<?php echo_meta('og_image'); ?>">
  <meta property="fb:app_id" content="146752389058128">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo_meta('title'); ?>">
  <meta name="twitter:description" content="<?php echo_meta('description'); ?>">
  <meta name="twitter:image" content="<?php echo_meta('og_image'); ?>">
  <meta name="twitter:url" content="<?php echo_meta('og_url'); ?>">
  <meta name="format-detection" content="telephone=no">
  <meta name="robots" content="<?php if(!get_field('noindex')): ?>all<?php else: ?>none<?php endif; ?>">
  <link class="favicon" rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.ico">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/common.css">
  <!-- Global site tag (gtag.js) - Google Analytics-->
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-hogehoge-1"></script>
  <script>window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-hogehoge-1');</script>
</head>
