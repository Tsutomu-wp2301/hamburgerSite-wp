<!-- カスタムフィールド設定ページのIDを取得 -->
<?php 
$page = get_page_by_path('page-field');
$id = $page->ID;
?>


<?php get_header(); ?><!-- ヘッダーの呼び出し -->
      <div class="p-archive--image">
        <div class="c-bg--black--archive">
          <h1>Menu:<?php
          $category = get_the_category();
          echo ' ';
          if ($category) {
            foreach ($category as $cat) {
              echo esc_html($cat->name) . ' ';
            }
          }
          ?>
          </h1>
        </div>
      </div>
      <article class="p-archive--content--wrapper">
        <h2 class="c-archive--titlle"><?php echo esc_html(CFS()->get('h2-archive',$id)); ?></h2>
        <p><?php echo esc_html(CFS()->get('text-archive',$id)); ?></p>
        
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
    <div class="c-back"></div>
    <p>前へ</p>
    <p>次へ</p>
    <div class="c-next"></div>
  </nav>
  <?php get_footer(); ?>