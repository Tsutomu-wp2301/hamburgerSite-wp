<?php get_header(); ?><!-- ヘッダーの呼び出し -->
      <div class="p-archive--image">
        <div class="c-bg--black--archive">
          <h1><?php single_term_title(); ?></h1>
        </div>
      </div>
      <article class="p-archive--content--wrapper">
        <h2 class="c-archive--titlle">小見出しが入ります</h2>
        <p>サーチページ　キストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        
        <?php if( have_posts() ) :  while( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php get_template_part( 'template-parts/excerpt', 'post'); ?>
          </article>
        <?php endwhile;  endif; ?>

        <!-- <section class="p-archive__item--wrapper">
          <div class="c-archive__image--w-cheeseBurger"></div>
          <div class="p-archive__item">
            <h3>見出しが入ります</h3>
            <h4>小見出しが入ります</h4>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <a href="#" class="c-button--archive p-stretched--link">詳しく見る</a>
          </div>
        </section>
        <section class="p-archive__item--wrapper">
          <div class="c-archive__image--s-cheeseBurger"></div>
          <div class="p-archive__item">
            <h3>見出しが入ります</h3>
            <h4>小見出しが入ります</h4>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <a href="#" class="c-button--archive p-stretched--link">詳しく見る</a>
          </div>
        </section>
        <section class="p-archive__item--wrapper">
          <div class="c-archive__image--s-cheeseBurger"></div>
          <div class="p-archive__item">
            <h3>見出しが入ります</h3>
            <h4>小見出しが入ります</h4>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <a href="#" class="c-button--archive p-stretched--link">詳しく見る</a>
          </div>
        </section>
        <section class="p-archive__item--wrapper">
          <div class="c-archive__image--s-cheeseBurger"></div>
          <div class="p-archive__item">
            <h3>見出しが入ります</h3>
            <h4>小見出しが入ります</h4>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <a href="#" class="c-button--archive p-stretched--link">詳しく見る</a>
          </div>
        </section> -->

      </article>
      <nav class="p-navigation">
        <p>page</p>
        <?php wp_pagenavi(); ?>
        <!-- <ul>
          <li>page 1/10</li>
          <li class="c-back"></li>
          <li class="p-page--number">１</li>
          <li class="p-page--number">2</li>
          <li class="p-page--number">3</li>
          <li class="p-page--number">4</li>
          <li class="p-page--number">5</li>
          <li class="p-page--number">6</li>
          <li class="p-page--number">7</li>
          <li class="p-page--number">8</li>
          <li class="p-page--number">9</li>
          <li class="c-next"></li>
        </ul> -->
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