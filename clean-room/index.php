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

  <title>クリーンルーム | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Clean-Room">
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
              <h1 class="p-header01--text__en">Clean room</h1>
              <p class="p-header01--text__jp">クリーンルーム</p>
            </div>
          </div>
          <div class="p-header01--bg p-header01--bg__clean-room"></div>
        </div>
      </section> 
      <nav class="c-breadcrumbs">
        <div class="container">
          <ul class="c-breadcrumbs--list">
            <li class="c-breadcrumbs--item">
              <a href="" class="c-breadcrumbs--link">TOP</a>
            </li>
            <li class="c-breadcrumbs--item">
              <a href="" class="c-breadcrumbs--link">事業内容</a>
            </li>
            <li class="c-breadcrumbs--item">
              <a href="" class="c-breadcrumbs--link">クリーンルーム</a>
            </li>
          </ul>
        </div>        
      </nav>
      <section class="sect-1">
        <div class="wrapper">
          <div class="container">
            <div class="row">
              <div class="col">
                <h2 class="ttl">お客様の要望に合わせた<br>最適な空調環境を実現</h2>
              </div>
              <div class="col">
                <p class="desc">
                  クリーンルームとは、対象空間内に浮遊する塵や埃、微生物や分子汚染物質、異物等を目的の清浄度レベル以下に維持・管理された空間です。<br>
                  食品や精密機器などを扱う現場では、高度な空気清浄度が求められます。<br>
                  恒温恒湿、除湿空調など確かな技術と経験で、お客様の要望に合わせた最適な空調環境を実現します。
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
                <img src="/images/clean-room/img_1.jpg" alt="水と熱を極めた多くの経験と実績">
                <h3 class="ttl cst-mg">水と熱を極めた多くの経験と実績</h3>
                <p class="desc">快適な環境と空間実現を「誠実」「創意工夫」「先進技術」をキャッチフレーズに設計から施工、アフターまで一貫して行って参ります。</p>
              </div>
              <div class="col">
                <img src="/images/clean-room/img_2.jpg" alt="ご利用シーンやご要望に合わせた最適なご提案">
                <h3 class="ttl">ご利用シーンやご要望に合わせた<br class="pc">最適なご提案</h3>
                <p class="desc">設立より60数年の実績と経験によりDQ/IQ/OQ/PQ/VALを含めた様々なニーズにお応えし、より良いご提案を致します。</p>
              </div>
              <div class="col">
                <img src="/images/clean-room/img_3.jpg" alt="24時間体制のアフターフォロー">
                <h3 class="ttl cst-mg">24時間体制のアフターフォロー</h3>
                <p class="desc">快適且つ確実な環境の維持と対応の為アフターメンテナンスのご提案は勿論、お客様のお困り事に真摯に対応致しております。</p>
              </div>
            </div>
            <div class="img-wrap">
              <a href="">
                <img src="/images/clean-room/img_4.jpg" alt="ONLY ONE CLEAN ROOM | つぼい工業のクリーンルーム">
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
