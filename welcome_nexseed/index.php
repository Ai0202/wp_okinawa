<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>welcome NexSeed Okinawa</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
</head>
<body>
  <!-- header -->
  <header id="fixed">
    <!-- header左側 -->
    <div class="icon">
      <img src="<?php echo get_template_directory_uri(); ?>/img/seedkun.png" alt="Seedkun">
      <span class="name"><strong>Seed</strong>Kun</span>
    </div>
    <!-- header右側 -->
    <ul class="header-right">
      <li>新規登録</li>
      <li>ログイン</li>
    </ul>
  </header>
  <!-- headerここまで -->

  <!-- welcome -->
  <main class="welcome" id="margin-for-fixed">
    <h1 class="title">Welcome to NexSeed Okinawa</h1>
    <ul class="guideline">
      <li>Be Athlete</li>
      <li>Go World</li>
      <li>Enjoy Everything</li>
    </ul>
    <div class="btn-group">
      <button class="btn register">新規登録</button>
      <button class="btn login">ログイン</button>
    </div>
  </main>
  <!-- welcomeここまで -->

  <!-- curriculum -->
  <main class="curriculum">
    <h2 class="sub-title">NexSeed Life</h2>
    <ul class="img-box">
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/programming.jpg" alt="">
        <span>programing</span>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/english.jpg" alt="">
        <span>English</span>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/enjoy.jpg" alt="">
        <span>Enjoy</span>
      </li>
    </ul>
  </main>
  <!-- curriculumここまで -->

  <!-- contact -->
  <aside class="contact">
    <h2 class="sub-title">contact us</h2>
    <!-- form -->
    <form action="">
      <div class="form">
        <!-- 左側のフォーム -->
        <div class="form-left">
          <fieldset>
            <input  class="name" type="text" placeholder="お名前">
          </fieldset>
          <fieldset>
            <input  class="email" type="email" placeholder="メールアドレス">
          </fieldset>
        </div>
        <!-- 右側のフォーム -->
        <fieldset>
          <textarea  class="inquiry" name="" placeholder="お問い合わせ内容"></textarea>
        </fieldset>
      </div>
      <button>submit</button>
    </form>
  </aside>
  <!-- contactここまで -->

  <!-- footer -->
  <footer>
    <!-- footer左側 -->
    <div class="icon">
      <img src="<?php echo get_template_directory_uri(); ?>/img/seedkun.png" alt="Seedkun">
      <span class="name"><strong>Seed</strong>Kun</span>
    </div>
    <!-- footer右側 -->
    <p class="footer-right">Copyright (c) SeedKun inc</p>
  </footer>
</body>
</html>
