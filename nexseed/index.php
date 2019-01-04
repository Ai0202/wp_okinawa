
<?php get_header(); ?>
  <!-- welcome -->
    <main class="welcome" id="margin-for-fixed">
      <h1 class="title">Welcome to NexSeed Okinawa</h1>
      <ul class="guideline">
        <li>Be Athlete</li>
        <li>Go World</li>
        <li>Enjoy Everything</li>
      </ul>
      <div class="btn-group">
        <button class="btn register js-register">新規登録</button>
        <button class="btn login js-login">ログイン</button>
      </div>
    </main>
  <!-- welcomeここまで -->

  <!-- 記事一覧 -->
  <?php if (have_posts()): ?>
  <h2><span>最新の投稿</span></h2>
      <ul>
        <?php while (have_posts()): the_post(); ?>
            <li id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
              <?php if (has_post_thumbnail()): ?>
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('thumbnail'); ?>
                </a>
              <?php else: ?>
                <a href="<?php the_permalink(); ?>">
                    <img src="https://placehold.jp/150x150.png" alt="" height="150", width="150">
                </a>                
              <?php endif; ?>
              <p><?php the_category(); //カテゴリ ?></p>
              <p><?php the_time('Y年m月d日'); //投稿日時 ?></p>
              <p>
                <a href="<?php the_permalink(); //詳細へのリンク ?>"><?php the_title(); //タイトル ?></a>
              </p>
              <p>
                <?php the_excerpt(); //本文抜粋 ?>
                <a href="<?php the_permalink(); //詳細へのリンク ?>">続きを読む</a>
              </p>
            </li>
        <?php endwhile; ?>
      </ul>
      
  <?php else: ?>
      <h2><span>投稿はありません</span></h2>
  <?php endif; ?>

<?php get_footer(); ?>