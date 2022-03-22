<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/config.php"); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/tag_manager.php"); ?>
  <meta charset="UTF-8" />
  <meta name="robots" content="index,follow">
  <link rel="canonical" href="<?php echo CANONICAL ?>">
  <meta name="keywords" content="<?php echo KEY_WORD ?>">
  <meta name="description" content="<?php echo DESCRIPTION ?>">
  <meta property="og:title" content="<?php echo SITE_NAME ?>">
  <meta property="og:type" content="article" /> <!-- 下層では「article」にしてください -->
  <meta property="og:description" content="<?php echo DESCRIPTION ?>" />
  <meta property="og:url" content="<?php echo CANONICAL ?>" />

  <title>新着情報 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="News">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="p-header01">
        <div class="p-header01--wrap">
          <div class="p-header01--text">
            <div class="container">
              <h1 class="p-header01--text__en">News</h1>
              <p class="p-header01--text__jp">新着情報</p>
            </div>
          </div>
          <div class="p-header01--bg p-header01--bg__faq"></div>
        </div>
      </section> 
      <nav class="c-breadcrumbs">
        <div class="container">
          <ul class="c-breadcrumbs--list">
            <li class="c-breadcrumbs--item">
              <a href="" class="c-breadcrumbs--link">TOP</a>
            </li>
            <li class="c-breadcrumbs--item">
              <a href="" class="c-breadcrumbs--link">新着情報</a>
            </li>
          </ul>
        </div>        
      </nav>
      <section class="news-section">
        <div class="wrapper">
          <div class="container">
            <ul class="news_ul">
              <li class="news_li">
                <a href="">
                  <span class="date">2021.09.01</span>
                  <span class="title">ホームページをリニューアルしました！</span>
                </a>
              </li>
              <li class="news_li">
                <a href="">
                  <span class="date">2021.09.01</span>
                  <span class="title">ホームページをリニューアルしました！</span>
                </a>
              </li>
              <li class="news_li">
                <a href="">
                  <span class="date">2021.09.01</span>
                  <span class="title">ホームページをリニューアルしました！</span>
                </a>
              </li>
              <li class="news_li">
                <a href="">
                  <span class="date">2021.09.01</span>
                  <span class="title">ホームページをリニューアルしました！</span>
                </a>
              </li>
              <li class="news_li">
                <a href="">
                  <span class="date">2021.09.01</span>
                  <span class="title">ホームページをリニューアルしました！</span>
                </a>
              </li>
              <li class="news_li">
                <a href="">
                  <span class="date">2021.09.01</span>
                  <span class="title">ホームページをリニューアルしました！</span>
                </a>
              </li>
              <li class="news_li">
                <a href="">
                  <span class="date">2021.09.01</span>
                  <span class="title">ホームページをリニューアルしました！</span>
                </a>
              </li>
            </ul>
            <!-- Wordpress -->
            <div class="page_navigation">
              <div class="wp-pagenavi">
                <a class="previouspostslink" href="#" rel="prev"></a>
                <a class="page smaller" href="#">1</a>
                <span class="current">2</span>
                <a class="page larger" href="#">3</a>
                <a class="nextpostslink" href="#" rel="next"></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="floating-img">
        <img src="/images/top/sect_4/float_img_1.png" alt="">
      </div>
    </main>

    <footer>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
    </footer>
  </div><!-- //AllBox -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
</body>

</html>
