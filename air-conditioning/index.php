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

  <title>空調換気設備工事 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Air-Conditioning">
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
              <h1 class="p-header01--text__en">Air conditioning</h1>
              <p class="p-header01--text__jp">空調換気設備工事</p>
            </div>
          </div>
          <div class="p-header01--bg p-header01--bg__air-conditioning"></div>
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
              <a href="" class="c-breadcrumbs--link">空調換気設備工事</a>
            </li>
          </ul>
        </div>        
      </nav>
      <section class="sect-1">
        <div class="wrapper">
          <div class="container">
            <div class="row">
              <div class="col">
                <h2 class="ttl">快適な空間を創造する<br>空調換気設備</h2>
              </div>
              <div class="col">
                <p class="desc">同じような建物でも、立地や建物内での作業、人数によって必要な空調換気システムは異なるもの。私たちは経済性や省エネルギー性、そして温暖化対策を考慮して、快適な空間のためのエアコンや換気システムなどの空調換気設備をサポートいたします。</p>
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
                <img src="/images/business/air-conditioning/img_1.jpg" alt="セントラル空調">
                <h3 class="ttl">セントラル空調</h3>
                <p class="desc">建物内の空調を集中管理している空調。1カ所に設けられた装置から各フロア各部屋へ冷気や暖気を送ります。大型施設へ導入される場合が多く、コスト面からも部屋ごとに空調するよりも効果的です。</p>
              </div>
              <div class="col">
                <img src="/images/business/air-conditioning/img_2.jpg" alt="個別空調">
                <h3 class="ttl">個別空調</h3>
                <p class="desc">各部屋に空調を設置するため、起動や停止、温度や風量の調節を個別に行うことができます。使わない時には停止することができるので、建物内の使用時間帯が異なる場合などに経済的になります。</p>
              </div>
              <div class="col">
                <img src="/images/business/air-conditioning/img_3.jpg" alt="換気">
                <h3 class="ttl">換気</h3>
                <p class="desc">建物に合わせた換気システムをご提案します。<br>普通換気だけでなく、ロスナイをはじめとする全熱交換器は、排出する室内空気の熱エネルギーを利用して、屋外の空気温度を室内温度に近づけてから室内に取り込むことができるので省エネにも役立ちます。</p>
              </div>
            </div>
            <div class="btn-cont">
              <a href="" class="c-button01">
                <p class="c-button01--txt">
                  空調換気設備工事の実績
                  <span class="c-button01--arrow">
                    <img src="/images/common/arrow_icon_wh.svg" alt="">
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
