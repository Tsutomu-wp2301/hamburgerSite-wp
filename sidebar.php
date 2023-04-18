<aside class="p-aside p-aside--fonts l-aside l-aside__font-layout">
      <button class="c-button-close"><p>Menuを閉じる</p></button><!-- メニュー閉じるボタン -->
      <h2>Menu</h2>
      <!-- <h3>バーガー</h3>
      <ul>
        <li>ハンバーガー</li>
        <li>チーズバーガー</li>
        <li>テリヤキバーガー</li>
        <li>アボカドバーガー</li>
        <li>フィッシュバーガー</li>
        <li>ベーコンバーガー</li>
        <li>チキンバーガー</li>
      </ul>
      <h3>サイド</h3>
      <ul>
        <li>ポテト</li>
        <li>サラダ</li>
        <li>ナゲット</li>
        <li>コーン</li>
      </ul>
      <h3>ドリンク</h3>
      <ul>
        <li>コーラ</li>
        <li>ファンタ</li>
        <li>オレンジ</li>
        <li>アップル</li>
        <li>紅茶(Ice/Hot)</li>
        <li>コーヒー(Ice/Hot)</li>
        <li>コーラ</li>
        <li>ファンタ</li>
        <li>オレンジ</li>
        <li>アップル</li>
        <li>紅茶(Ice/Hot)</li>
        <li>コーヒー(Ice/Hot)</li>
        <li>コーラ</li>
        <li>ファンタ</li>
        <li>オレンジ</li>
        <li>アップル</li>
        <li>紅茶(Ice/Hot)</li>
        <li>コーヒー(Ice/Hot)</li>
        <li>コーラ</li>
        <li>ファンタ</li>
        <li>オレンジ</li>
        <li>アップル</li>
        <li>紅茶(Ice/Hot)</li>
        <li>コーヒー(Ice/Hot)</li>
      </ul> -->

      <!-- <?php
        if ( is_active_sidebar( 'sideMenu_widget' ) ) :
            dynamic_sidebar( 'sideMenu_widget' );
        else:
    ?>
    <div class="widget">
        <h2>No Widget</h2>
        <p>ウィジットは設定されていません。</p>
    </div>
    <?php endif; ?> -->


    <?php if ( is_active_sidebar('sideMenu_widget') ) : ?>
  <?php dynamic_sidebar('sideMenu_widget'); ?>
<?php endif; ?>
    </aside>

