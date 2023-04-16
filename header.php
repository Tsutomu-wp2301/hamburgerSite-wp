<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo( 'name' ); ?></title>
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <!-- <link rel="stylesheet" href="./css/style.css"> -->
  <meta name="vewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body class="l-body">
  <div class="c-flex">
    <main class="l-main">
      <button class="c-slide--button"><a>Menu</a></button><!-- メニュー表示ボタン -->
      <header class="p-header l-header">
        <P class="c-logo">Hamburger</P>
        <?php get_search_form(); ?><!-- サーチフォームの呼び出し -->
        <div class="c-color-board--black"></div><!-- メニュー展開時に画面を暗くする -->
      </header>