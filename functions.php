<?php 

// テーマサポート
  add_theme_support('menus');
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );


  // タイトル出力
  function hamburgerSite_title( $title ) {
    if ( is_front_page() && is_home() ) { //トップページなら
        $title = get_bloginfo( 'name', 'display' );
    } elseif ( is_singular() ) { //シングルページなら
        $title = single_post_title( '', false );
    }
        return $title;
    }
  add_filter( 'pre_get_document_title', 'hamburgerSite_title' );  


// スタイルシート、JSファイルの読み込み
function add_files(){
    wp_enqueue_style('my_style', get_template_directory_uri().'/css/style.css');
    wp_enqueue_script('fadeIn_script', get_template_directory_uri().'/JS/fadeIn.js');
    wp_enqueue_script('fadeOut_script', get_template_directory_uri().'/JS/fadeOut.js');
    wp_enqueue_script('toggle_class_close_script', get_template_directory_uri().'/JS/toggle-class--close.js');
    wp_enqueue_script('toggle_class_open_script', get_template_directory_uri().'/JS/toggle-class--open.js');
}
  add_action('wp_enqueue_scripts', 'add_files');


  // ウィジェットの追加
  function hamburgerSite_widgets_init() {
    register_sidebar (
        array(
            'name'          => 'サイドメニューウィジェット',
            'id'            => 'sideMenu_widget',
            'description'   => 'サイドメニュー用ウィジェットです',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2><i class="fa fa-folder-open" aria-hidden="true"></i>',
            'after_title'   => "</h2>\n",
        )
    );
}
add_action( 'widgets_init', 'hamburgerSite_widgets_init' );


