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
              <h3>
                <?php $h2_take_out = CFS()->get('take_out_title_1'); ?>
                <?php if(!empty($h2_take_out)) {
                  echo esc_html($h2_take_out);
                } else { 
                  echo 'テイクアウトの小見出しを設定';
                } ?>
              </h3>
              <p>
              <?php $text_take_out = CFS()->get('take_out_text_1'); ?>
                <?php if(!empty($text_take_out)) {
                  echo esc_html($text_take_out);
                  } else { 
                    echo 'ここにテイクアウトの説明文をを入力します';
                  } ?>
              </p>
            </div>
            <div class="p-content__item">
              <h3>
                <?php $h2_take_out2 = CFS()->get('take_out_title_2'); ?>
                <?php if(!empty($h2_take_out2)) {
                  echo esc_html($h2_take_out2);
                } else { 
                  echo 'テイクアウトの小見出しを設定';
                } ?>
              </h3>
              <p>
              <?php $text_take_ou2 = CFS()->get('take_out_text_2'); ?>
                <?php if(!empty($text_take_out2)) {
                  echo esc_html($text_take_out2);
                  } else { 
                    echo 'ここにテイクアウトの説明文をを入力します';
                  } ?>
              </p>
            </div>
          </div>
        </section>
        <section class="p-content p-content--bg--EatIn">
          <h2 class="c-title">Eat In</h2>
          <div class="p-content__item--wrapper">
            <div class="p-content__item">
              <h3>
                <?php $h2_eat_in = CFS()->get('eat_in_title_1'); ?>
                <?php if(!empty($h2_eat_in)) {
                  echo esc_html($h2_eat_in);
                } else { 
                  echo 'イートインの小見出しを設定';
                } ?>
              </h3>
              <p>
                <?php $text_eat_in = CFS()->get('eat_in_text_1'); ?>
                <?php if(!empty($text_eat_in)) {
                  echo esc_html($text_eat_in);
                  } else { 
                    echo 'ここにイートインの説明文をを入力します';
                  } ?>
              </p>
            </div>
            <div class="p-content__item">
              <h3>
                <?php $h2_eat_in2 = CFS()->get('eat_in_title_2'); ?>
                <?php if(!empty($h2_eat_in2)) {
                  echo esc_html($h2_eat_in2);
                  } else { 
                    echo 'イートインの小見出しを設定';
                  } 
                ?>
              </h3>
              <p>
                <?php $text_eat_in2 = CFS()->get('eat_in_text_2'); ?>
                <?php if(!empty($text_eat_in2)) {
                  echo esc_html($text_eat_in2);
                  } else { 
                    echo 'ここにイートインの説明文をを入力します';
                  } 
                ?>
              </p>
            </div>
          </div>
        </section>
      </article>
      <article class="c-bg--black">
        <div class="p-map">
          <div class="c-color-board">
            <h2 class="c-title map">
              <?php $map_title1 = CFS()->get('map_title'); ?>
              <?php if(!empty($map_title1)) {
                echo esc_html($map_title1);
                } else { 
                  echo '地図の見出しを設定します';
                } 
              ?>
            </h2>
            <p>
              <?php $text_map = CFS()->get('map_text'); ?>
              <?php if(!empty($text_map)) {
                echo esc_html($text_map);
                } else { 
                  echo 'ここに地図の説明文を入力します';
                } 
              ?>
            </p>
          </div>
        </div>
      </article>
      <br>
      <br>
      <br>

      <!-- アーカイブページの見出し--カスタムフィールド -->
      <article class="p-archive--content--wrapper">
        <h2 class="c-archive--titlle">
          <?php $h2_archive = CFS()->get('h2-archive'); ?>
          <?php if(!empty($h2_archive)) {
            echo esc_html($h2_archive);
            } else { 
              echo 'アーカイブページの小見出しを設定します';
            } 
          ?>
        </h2>
        <p>
          <?php $text_archive = CFS()->get('text-archive'); ?>
          <?php if(!empty($text_archive)) {
            echo esc_html($text_archive);
            } else { 
              echo 'ここにアーカイブページの説明文をを入力します';
            } 
          ?>
        </p>
      </article>
      <br>
      <br>
      <br>
      <br>
      <br>

      <!-- サーチページの見出し---カスタムフィールド -->
      <article class="p-archive--content--wrapper">
        <h2 class="c-archive--titlle">
        <?php $h2_search_title = CFS()->get('h2-search'); ?>
          <?php if(!empty($h2_search_title)) {
            echo esc_html($h2_search_title);
            } else { 
              echo 'サーチページの小見出しを設定します';
            } 
          ?>
        </h2>
        <p>
        <?php $search_text = CFS()->get('text-search'); ?>
          <?php if(!empty($search_text)) {
            echo esc_html($search_text);
            } else { 
              echo 'サーチページの説明文を入力します';
            } 
          ?>
        </p>
      </article>
    </main>
  </div>
</div>
<?php get_footer(); ?>