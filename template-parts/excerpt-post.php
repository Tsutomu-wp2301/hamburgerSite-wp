<section class="p-archive__item--wrapper">
  <?php if(has_post_thumbnail()) : ?>
  <div class="c-archive__image--cheeseBurger"><?php the_post_thumbnail('archive_thumbnail'); ?>
    <?php else : ?>
      <img src='<?php echo exc_url(get_template_directory_uri()); ?>/image/hamburger.png'>
    <?php endif; ?>
  </div>
  <div class="p-archive__item">
    <h3><?php the_title(); ?></h3>
    <h4><?php echo esc_html(CFS()->get('h2-menu',$id)); ?></h4>
    <p><?php echo esc_html(mb_substr(get_the_excerpt(),0,60)) . '...'; ?></p>
    <a href="<?php the_permalink(); ?>" class="c-button--archive p-stretched--link">詳しく見る</a>
  </div>

</section>