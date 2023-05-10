<?php get_header(); ?><!-- ヘッダーの呼び出し -->

<?php 
/* 
Template Name:ショップについて
*/ 
?>
      <section>
        <h1 class="p-page-image"><?php the_title(); ?></h1>
        <article class="p-single--layout">
          <h2><?php echo CFS()->get('h2'); ?></h2>
          <p><?php echo CFS()->get('h2-text'); ?></p>
          <h3><?php echo CFS()->get('h3'); ?></h3>
          <h4><?php echo CFS()->get('h4'); ?></h4>
          <h5><?php echo CFS()->get('h5'); ?></h5>
          <h6><?php echo CFS()->get('h6'); ?></h6>
     
          <blockquote>
            blockquote引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用<br>
            <p>出典元：　<a href="#">○○○○○○○○○○○○</a></p>
          </blockquote>
          <article class="p-flex--single">
            <img class="p-product--image--long" src="<?php echo CFS()->get('main-menu-image'); ?>">
            <div class="p-flex--single-content"><!-- 写真とテキストを横並び -->
              <img class="p-product--image" src="<?php echo CFS()->get('menu1--image'); ?>">
              <P><?php echo CFS()->get('product-text1'); ?></P>
            </div>
            <div class="p-flex--single-content"><!-- 写真とテキストを横並び -->
              <img class="p-product--image" src="<?php echo CFS()->get('menu2--image'); ?>">
              <P class="left"><?php echo CFS()->get('product-text2'); ?></P>
            </div>
          </article>
          <?php if( have_posts() ) :  while( have_posts() ) : the_post(); ?><!-- メインループ -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <?php the_content(); ?>
            </article>
          <?php endwhile;  endif; ?>
        </article>
      </section>
    </main>
    <?php get_sidebar(); ?>
  </div>
  <?php get_footer(); ?>