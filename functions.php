<?php
function add_files() {
  // WordPress提供のjquery.jsを読み込まない
  wp_deregister_script('jquery');
  // jQueryの読み込み
  wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', "", "20180727", false );
  // サイト共通JS
  wp_enqueue_script( 'showMenu', get_template_directory_uri().'/showMenu.js', array( 'jquery' ), '1.0', true );
  // サイト共通のCSSの読み込み
  wp_enqueue_style( 'style', get_template_directory_uri().'/stylesheets/style.css', "", '1.0.0' );
  wp_enqueue_style( 'mainStyle', get_template_directory_uri().'/stylesheets/mainStyle.css', "", '1.0.2' );
  wp_enqueue_style( 'blog', get_template_directory_uri() . '/stylesheets/blog.css', "", '1.2.4' );
}

// アイキャッチ画像を有効
add_theme_support('post-thumbnails');   // カスタム投稿タイプ blog で thumbnail を使うので追記
add_action('wp_enqueue_scripts', 'add_files');
?>