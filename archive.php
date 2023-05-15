<?php get_header(); ?><!-- ヘッダーの呼び出し -->
      <div class="p-archive--image">
        <div class="c-bg--black--archive">
          <h1>Menu:</h1>
        </div>
      </div>
      <article class="p-archive--content--wrapper">
        <h2 class="c-archive--titlle"><?php echo CFS()->get('h2-archive'); ?>小見出しが入ります</h2>
        <p><?php echo CFS()->get('text-archive'); ?>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        
        
      <!-- /* サブループ開始 */ -->
       <!-- <?php 
          $search_args = array(
            'post-type'       => 'post',  /* 出力する投稿タイプ */
            'posts_per_page'  => '3',  /* 表示数 */
            'category_name'   =>'','',  /* カテゴリーのスラッグ名 */
            'order'           =>'',  /* 昇順はASC、降順はDESC */
            'orderby'         =>'',  /* 何を基準に並び替えるか */
          );
          $search_post_query = new WP_Query($search_args);
          if($search_post_query->have_posts()) : 
            ?>
            <?php while($search_post_query->have_posts()) :
            $search_post_query->the_post();
            ?>
          <?php get_template_part( 'template-parts/excerpt', 'post'); ?>
        <?php endwhile; wp_reset_postdata(); endif; ?> -->
        <!-- サブループ終了 -->

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