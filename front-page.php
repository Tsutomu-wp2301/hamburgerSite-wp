<!-- カスタムフィールド設定ページのIDを取得 -->
<?php 
$page = get_page_by_path('page-field');
$id = $page->ID;
?>

<?php get_header(); ?><!-- ヘッダーの呼び出し -->
      <h1 class="p-main-image">ダミーサイト</h1>
      <article class="p-content--wrapper">
        <section class="p-content p-content--bg" id="js-takeOut">
          <h2 class="c-title">Take Out</h2>
          <div class="p-content__item--wrapper">
            <div class="p-content__item">
              <h3><?php echo CFS()->get('take_out_title_1',$id); ?></h3>
              <p><?php echo CFS()->get('take_out_text_1',$id); ?></p>
            </div>
            <div class="p-content__item">
              <h3><?php echo CFS()->get('take_out_title_2',$id); ?></h3>
              <p><?php echo CFS()->get('take_out_text_2',$id); ?></p>
            </div>
          </div>
        </section>
        <section class="p-content p-content--bg--EatIn" id="js-eatIn">
          <h2 class="c-title">Eat In</h2>
          <div class="p-content__item--wrapper">
            <div class="p-content__item">
              <h3><?php echo CFS()->get('eat_in_title_1',$id); ?></h3>
              <p><?php echo CFS()->get('eat_in_text_1',$id); ?></p>
            </div>
            <div class="p-content__item">
              <h3><?php echo CFS()->get('eat_in_title_2',$id); ?></h3>
              <p><?php echo CFS()->get('eat_in_text_2',$id); ?></p>
            </div>
          </div>
        </section>
      </article>
      <article class="c-bg--black">
        <div class="p-map">
          <div class="c-color-board">
            <h2 class="c-title map"><?php echo CFS()->get('map-title',$id); ?></h2>
            <p><?php echo CFS()->get('map-text',$id); ?></p>
          </div>
        </div>
      </article>
    </main>
    <?php get_sidebar(); ?>
  </div>
  <?php get_footer(); ?>

