<?php  
  global $post;
  $page_id = $post->ID;
?>

<?php get_header(); ?><!-- ヘッダーの呼び出し -->
      <section>
        <?php if( have_posts() ) :  while( have_posts() ) : the_post(); ?>
          <h1 class="p-single-image"><?php echo get_the_title(); ?></h1>
          <article class="p-single--layout">
            <h2><?php echo CFS()->get('h2-menu'); ?></h2>
            <p><?php echo CFS()->get('h2-menu-text'); ?></p>
            <h3><?php echo CFS()->get('h3-menu'); ?></h3>
            <h4><?php echo CFS()->get('h4-menu'); ?></h4>
            <h5><?php echo CFS()->get('h5-menu'); ?></h5>
            <h6><?php echo CFS()->get('h6-menu'); ?></h6>
            <blockquote>
              blockquote引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用<br>
              <p>出典元：　<a href="#">○○○○○○○○○○○○</a></p>
            </blockquote>
            <article class="p-flex--single">
                <img class="p-product--image--long" src="<?php echo CFS()->get('menu-image'); ?>">
              <div class="p-flex--single-content"><!-- 写真とテキストを横並び -->
                <img class="p-product--image" src="<?php echo CFS()->get('menu1-image'); ?>">
                <P><?php echo CFS()->get('menu1-text'); ?></P>
              </div>
              <div class="p-flex--single-content"><!-- 写真とテキストを横並び -->
                <img class="p-product--image" src="<?php echo CFS()->get('menu2-image'); ?>">
                <P class="left"><?php echo CFS()->get('menu2-text'); ?></P>
              </div>
              <?php the_content(); ?>
            </article>
          </article>
        <?php endwhile;  endif; ?>
      </section>
    </main>
    <?php get_sidebar(); ?>
  </div>
  <?php get_footer(); ?>