<?php  
  global $post;
  $page_id = $post->ID;
?>

<?php get_header(); ?><!-- ヘッダーの呼び出し -->
      <section>
        <?php if( have_posts() ) :  while( have_posts() ) : the_post(); ?>
          <h1 class="p-single-image"><?php echo get_the_title(); ?></h1>
          <article class="p-single--layout">
            <?php the_content(); ?>
          </article>
        <?php endwhile;  endif; ?>
      </section>
    </main>
    <?php get_sidebar(); ?>
  </div>
  <?php get_footer(); ?>