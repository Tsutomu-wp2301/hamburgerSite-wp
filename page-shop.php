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
            <div class="p-product--image--long"></div>
                <div class="p-flex--single-content"><!-- 写真とテキストを横並び -->
              <div class="p-product--image"></div>
              <P><?php echo CFS()->get('product-text1'); ?></P>
            </div>
            <div class="p-flex--single-content"><!-- 写真とテキストを横並び -->
              <div class="p-product--image"></div>
              <P class="left"><?php echo CFS()->get('product-text2'); ?></P>
            </div>
            <div class="p-product--image--center"></div>
            <ul class="p-product--item--wrapper">
              <?php if( have_posts() ) : ?>
                <?php 
                while( have_posts() ) :
                  the_post();
                  ?>
                  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <!-- <li class="p-product--item"> -->
                      <?php the_post_thumbnail( 'page_eyecatch' ); ?>
                    <!-- </li> -->
                  </article>
                <?php endwhile; ?>
              <?php endif; ?>
              <!-- <li class="p-product--item"></li>
              <li class="p-product--item"></li>
              <li class="p-product--item"></li>
              <li class="p-product--item"></li>
              <li class="p-product--item"></li>
              <li class="p-product--item"></li>
              <li class="p-product--item"></li>
              <li class="p-product--item"></li>
              <li class="p-product--item"></li> -->
            </ul>
          </article>
          <div class="p-single-list--wrapper">
            <ul>
              <li>1.リストリストリスト</li>
              <li>2.リストリストリスト</li>
            </ul>
            <ul class="indent">
              <li>1.リスト2リスト2リスト2</li>
              <li>2.リスト2リスト2リスト2</li>
            </ul>
            <ul>
              <li>1.リストリストリスト</li>
              <li>2.リストリストリスト</li>
            </ul>
            <ul>
              <li>リストリストリスト</li>
              <li>リストリストリスト</li>
            </ul>
            <ul class="indent">
              <li>リスト2リスト2リスト2</li>
              <li>リスト2リスト2リスト2</li>
            </ul>
            <ul>
              <li>リストリストリスト</li>
              <li>リストリストリスト</li>
            </ul>
          </div>
          <div class="p-code--area">
            <pre>
          &lt;html&gt;
                &lt;head&gt;
                &lt;/head&gt;
                &lt;body&gt;
                &lt;/body&gt;
          &lt;/html&gt;
            </pre>
          </div>
          <div class="p-flex--table">
            <ul class="p-table--left">
              <li>テーブル</li>
              <li>テーブル</li>
              <li>テーブル</li>
              <li>テーブル</li>
              <li>テーブル</li>
            </ul>
            <ul class="p-table--center">
              <li>テーブル</li>
              <li>テーブル</li>
              <li>テーブル</li>
              <li>テーブル</li>
              <li>テーブル</li>
            </ul>
            <ul class="p-table--right">
              <li>テーブル</li>
              <li>テーブル</li>
              <li>テーブル</li>
              <li>テーブル</li>
              <li>テーブル</li>
            </ul>
          </div>
          <button class="c-button--single">ボタン</button>
          <p class="bold">boldboldboldboldboldboldbold</p>
        </article>
      </section>
    </main>
    <?php get_sidebar(); ?>
  </div>
  <?php get_footer(); ?>