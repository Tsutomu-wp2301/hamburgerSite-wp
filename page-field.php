<?php  
  global $post;
  $page_id = $post->ID;
?>


<?php get_header(); ?><!-- ヘッダーの呼び出し -->

<?php 
/* 
Template Name:フロント、サーチ、アーカイブページ用のフィールド設定
*/ 
?>

      <article class="p-content--wrapper">
        <section class="p-content p-content--bg">
          <h2 class="c-title">Take Out</h2>
          <div class="p-content__item--wrapper">
            <div class="p-content__item">
              <h3><?php echo esc_html(CFS()->get('take_out_title_1')); ?></h3>
                <p><?php echo esc_html(CFS()->get('take_out_text_1')); ?></p>
              </div>
            <div class="p-content__item">
              <h3><?php echo esc_html(CFS()->get('take_out_title_2')); ?></h3>
              <p><?php echo esc_html(CFS()->get('take_out_text_2')); ?></p>
            </div>
          </div>
        </section>
        <section class="p-content p-content--bg--EatIn">
          <h2 class="c-title">Eat In</h2>
          <div class="p-content__item--wrapper">
            <div class="p-content__item">
              <h3><?php echo esc_html(CFS()->get('eat_in_title_1')); ?></h3>
              <p><?php echo esc_html(CFS()->get('eat_in_text_1')); ?></p>
            </div>
            <div class="p-content__item">
              <h3><?php echo esc_html(CFS()->get('eat_in_title_2')); ?></h3>
                <p><?php echo esc_html(CFS()->get('eat_in_text_2')); ?></p>
              </div>
            </div>
        </section>
      </article>
      <article class="c-bg--black">
        <div class="p-map">
          <div class="c-color-board">
            <h2 class="c-title map"><?php echo esc_html(CFS()->get('map-title')); ?></h2>
            <p><?php echo esc_html(CFS()->get('map-text')); ?></p>
          </div>
        </div>
      </article>
      <br>
      <br>
      <br>

      <!-- アーカイブページの見出し--カスタムフィールド -->
      <article class="p-archive--content--wrapper">
        <h2 class="c-archive--titlle"><?php echo esc_html(CFS()->get('h2-archive')); ?></h2>
        <p><?php echo esc_html(CFS()->get('text-archive')); ?></p>
      </article>
      <br>
      <br>
      <br>
      <br>
      <br>

      <!-- サーチページの見出し---カスタムフィールド -->
      <article class="p-archive--content--wrapper">
        <h2 class="c-archive--titlle"><?php echo esc_html(CFS()->get('h2-search')); ?></h2>
        <p><?php echo esc_html(CFS()->get('text-search')); ?></p>
      </article>

    </main>
  </div>
</div>
<?php get_footer(); ?>