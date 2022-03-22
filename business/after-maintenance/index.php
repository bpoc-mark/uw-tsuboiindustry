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

  <title>点検・修理・メンテナンス | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="After-Maintenance">
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
              <h1 class="p-header01--text__en">After maintenance </h1>
              <p class="p-header01--text__jp">点検・修理・メンテナンス</p>
            </div>
          </div>
          <div class="p-header01--bg p-header01--bg__after-maintenance"></div>
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
              <a href="" class="c-breadcrumbs--link">点検・修理・メンテナンス</a>
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
                  快適な環境維持のための<br>
                  アフターメンテナンス
                </h2>
              </div>
              <div class="col">
                <p class="desc">長年の経験と実績により、確実で丁寧な仕事を責任・誠意ある施工を最後まで行っております。けれども建物や設備の快適な環境を維持するためには、メンテナンスが重要です。私たちはアフターメンテナンス（修理、保守）についても365日24時間受付対応いたします。</p>
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
                <img src="/images/business/after-maintenance/img_1.jpg" alt="定期点検・委託点検">
                <h3 class="ttl">定期点検・委託点検</h3>
                <p class="desc">ご契約いただいたお客様の大切な設備を、定期的に保守点検、清掃、メンテナンスを行います。「忙しくて忘れてしまう」「設備の担当者がいない」「天井が高くて清掃できない」などでお困りの際は無料診断、無料お見積もりも行っています。</p>
              </div>
              <div class="col">
                <img src="/images/business/after-maintenance/img_2.jpg" alt="設備修理">
                <h3 class="ttl">設備修理</h3>
                <p class="desc">設備の修理は、365日24時間受付対応（静岡県西部地域）。夜間などお客様が不在の際の緊急トラブルにも警備会社と連携して迅速に対応しています。知識と技術を備えたサービスマンがお伺いいたしますので、お困り事は何でもご相談ください。</p>
              </div>
              <div class="col">
                <img src="/images/business/after-maintenance/img_3.jpg" alt="貯水槽洗浄">
                <h3 class="ttl">貯水槽洗浄</h3>
                <p class="desc">飲料用の水などを貯めておく貯水槽は長年清掃していないと、水垢やサビなどが溜まっています。そのため貯水槽の大きさに関わらず年１回以上の清掃と検査が義務づけられており、私たちは定期的に清掃・メンテナンスにお伺いし、安全な水の供給に努めています。</p>
              </div>
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
