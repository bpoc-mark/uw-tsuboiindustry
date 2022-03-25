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

  <title>その他工事 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Others">
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
              <h1 class="p-header01--text__en">Others</h1>
              <p class="p-header01--text__jp">その他工事</p>
            </div>
          </div>
          <div class="p-header01--bg p-header01--bg__others"></div>
        </div>
      </section> 
      <nav class="c-breadcrumbs">
        <div class="container">
          <ul class="c-breadcrumbs--list">
            <li class="c-breadcrumbs--item">
              <a href="/" class="c-breadcrumbs--link">TOP</a>
            </li>
            <li class="c-breadcrumbs--item">
              <a href="/business/" class="c-breadcrumbs--link">事業内容</a>
            </li>
            <li class="c-breadcrumbs--item">
              <a class="c-breadcrumbs--link">その他工事</a>
            </li>
          </ul>
        </div>        
      </nav>
      <section class="sect-1">
        <div class="wrapper">
          <div class="container">
            <div class="row">
              <div class="col">
                <h2 class="ttl">
                  お客様が必要とされる<br>
                  あらゆる工事を責任施工
                </h2>
              </div>
              <div class="col">
                <p class="desc">
                  上下水道工事やガス工事、厨房設備にいたるまで、お客様が必要とされる工事を幅広く承っております。<br>
                  関係書類の手続きから工事施工まですべて責任を持って施工させていただきますので、安心してご相談ください。
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="sect-2">
        <div class="wrapper">
          <div class="container">
            <div class="row">
              <div class="col">
                <img src="/images/business/others/img_1.jpg" alt="ガス工事">
                <h3 class="ttl">ガス工事</h3>
                <p class="desc">コンプレッサーをガスエンジンで駆動させ、ヒートポンプ方式で空調を行うGHPをはじめ、工場や住宅、店舗などで必要とされるガス配管設備工事を行います。</p>
              </div>
              <div class="col">
                <img src="/images/business/others/img_2.jpg" alt="厨房機器">
                <h3 class="ttl">厨房機器</h3>
                <p class="desc">お客様のご要望をお聞きしたうえで、経験豊富な専門スタッフが機能的で美しい厨房づくりをご提案。飲食店の厨房から給食センターや病院などの大きな厨房まで、設備設計から施工、メンテナンス、また厨房機器の販売もいたします。</p>
              </div>
              <div class="col">
                <img src="/images/business/others/img_3.jpg" alt="上下水道本管工事">
                <h3 class="ttl">上下水道本管工事</h3>
                <p class="desc">上下水道はもっとも大切なライフラインです。通常道路の下に布設された水道の本管から水を引き込んだり、下水道へ接続するための工事です。給排水設備工事と合わせて、関係書類の手続きから工事施工までを行っています。</p>
              </div>
            </div>
            <div class="btn-cont">
              <a href="" class="c-button01">
                <p class="c-button01--txt">
                  その他工事の実績
                  <span class="c-button01--arrow">
                    <img src="/images/common/arrow_icon_wh.svg" alt="矢印アイコン">
                  </span>
                </p>
              </a>
            </div>
          </div>
        </div>
      </section>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/business-card-footer.php"); ?>
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
