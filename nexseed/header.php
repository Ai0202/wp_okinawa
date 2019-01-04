<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>
    <?php bloginfo('name'); ?>
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" />
  <?php
      wp_enqueue_script('jquery'); //jQueryを1度だけ読み込む(プラグインと重複させない)
      wp_enqueue_script('base', get_template_directory_uri() . '/js/app.js');
      wp_head(); //headerにつけるおまじない
  ?>
</head>
<!-- ページ毎にcssを出し分ける -->
<body <?php body_class(); ?>>
  <!-- header -->
  <header id="fixed">
    <!-- header左側 -->
    <div class="icon">
      <!-- home_urlでtopへのリンクを作成 -->
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/seedkun.png" alt="Seedkun">
      </a>
      <span class="name"><strong>Seed</strong>Kun</span>
    </div>
    <!-- header右側 -->
    <ul class="header-right">
      <li class="js-register">新規登録</li>
      <li class="js-login">ログイン</li>
    </ul>
    <!-- ハンバーガーメニュー -->
    <div id="toggle" class="js-hamburger hamburger">
      <span></span>
    </div>
    <!-- ドロワー -->
    <div id="drower-bg"></div>
    <ul class="drower js-drower">
      <li class="js-register">新規登録</li>
      <li class="js-login">ログイン</li>
    </ul>

  </header>
  <!-- headerここまで -->