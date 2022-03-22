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

<body id="News-Detail">
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
            <li class="c-breadcrumbs--item">
              <a href="" class="c-breadcrumbs--link">ホームページをリニューアルしました！</a>
            </li>
          </ul>
        </div>        
      </nav>
      <section class="news-section">
        <div class="wrapper">
          <div class="container">
            <div class="content">
              <div class="top">
                <h2 class="title">ホームページをリニューアルしました！</h2>
                <span class="date">2021.09.01</span>
              </div>
              <p class="desc">
                私たちは長年に亘り、ビルや工場、教育・文化施設を中心とする公共施設、病院・医療施設、ホテルなどの福利厚生施設において必要とされるあらゆる設備設計に携わってまいりました。<br>
                これらの実績と経験をもとに、図面の段階からエネルギーの効率化や省エネルギー性はもちろん、お客様の立場に立ってお客様の事業に貢献できるさまざまな設備をご提案し、設計・施工はもちろん、メンテナンスまで一貫してコーディネートいたします。
              </p>
              <img src="/images/news-detail/img_1.jpg" alt="ホームページをリニューアルしました！">
              <ul class="nav">
                <li class="nav-prev">
                  <a href=""><img src="/images/common/arrow_icon.svg" alt="矢印アイコン"> Prev</a>
                </li>
                <li class="nav-list">
                  <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="22.33" height="15.63" viewBox="0 0 22.33 15.63"><g id="ae7ad000-5736-4529-8f84-6c7233c44b9c" data-name="Layer 2"><g id="a00df368-dcd9-436d-b1cf-9ae78076d5d4" data-name="レイヤー 1"><rect width="3.98" height="2.48"></rect><rect x="7.19" width="15.14" height="2.48"></rect><rect y="6.57" width="3.98" height="2.48"></rect><rect x="7.19" y="6.57" width="15.14" height="2.48"></rect><rect y="13.15" width="3.98" height="2.48"></rect><rect x="7.19" y="13.15" width="15.14" height="2.48"></rect></g></g></svg></a>
                </li>
                <li class="nav-next">
                  <a href="">Next <img src="/images/common/arrow_icon.svg" alt="矢印アイコン"></a>
                </li>
              </ul>
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
