<!-- カスタムフィールド設定ページのIDを取得 -->
<?php 
$page = get_page_by_path('page-field');
$id = $page->ID;
?>

<?php get_header(); ?><!-- ヘッダーの呼び出し -->
      <div class="p-archive--image">
        <div class="c-bg--black--archive">
          <h1>Search:</h1>
        </div>
      </div>
      <article class="p-archive--content--wrapper">
        <h2 class="c-archive--titlle">
          <?php $h2_search_title = CFS()->get('h2_search',$id); ?>
            <?php if(!empty($h2_search_title)) {
            echo esc_html($h2_search_title);
            } else { 
              echo 'サーチページの小見出しを設定します';
            } 
          ?>
        </h2>
        <p>
          <?php $search_text = CFS()->get('text_search',$id); ?>
          <?php if(!empty($search_text)) {
            echo esc_html($search_text);
            } else { 
              echo 'サーチページの説明文を入力します';
            } 
          ?>
        </p>

        <?php if( have_posts() ) :  while( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php get_template_part( 'template-parts/excerpt', 'post'); ?>
          </article>
        <?php endwhile;  endif; ?>

      </article>
      <nav class="p-navigation">
        <p>page</p>
        <?php wp_pagenavi(); ?>
      </nav>
      <div class="c-color-board--black"></div><!-- メニュー展開時に画面を暗くする -->
    </main>
    <?php get_sidebar(); ?>
  </div>
  <nav class="p-navigation--sp">
    <P><?php previous_posts_link('<< 前へ'); ?></P>
    <P><?php next_posts_link('次へ >>'); ?></P>
  </nav>
  <?php get_footer(); ?>