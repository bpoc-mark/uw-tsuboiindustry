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

  <title>総合設備コンサルティング | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Consulting">
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
              <h1 class="p-header01--text__en">Consulting</h1>
              <p class="p-header01--text__jp">総合設備コンサルティング</p>
            </div>
          </div>
          <div class="p-header01--bg p-header01--bg__consulting"></div>
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
              <a href="" class="c-breadcrumbs--link">総合設備コンサルティング</a>
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
                実績と経験を生かした<br>
                総合設備コンサルティング
                </h2>
              </div>
              <div class="col">
                <p class="desc">
                  私たちは長年に亘り、ビルや工場、教育・文化施設を中心とする公共施設、病院・医療施設、ホテルなどの福利厚生施設において必要とされるあらゆる設備設計に携わってまいりました。<br>
                  これらの実績と経験をもとに、図面の段階からエネルギーの効率化や省エネルギー性はもちろん、お客様の立場に立ってお客様の事業に貢献できるさまざまな設備をご提案し、設計・施工はもちろん、メンテナンスまで一貫してコーディネートいたします。
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
                <img src="/images/business/consulting/img_1.jpg" alt="建物の大きさや用途に応じて各種設備の設計・レイアウト">
                <h3 class="ttl">建物の大きさや用途に応じて各種設備の設計・レイアウト</h3>
                <p class="desc">各種設備の設計・レイアウトや建物の用途や管理などを総合的に理解することが重要です。十分な打合せを行い、電気、空調、水道などあらゆる設備についてご提案させていただきます。</p>
              </div>
              <div class="col">
                <img src="/images/business/consulting/img_2.jpg" alt="エネルギーの効率化や省エネルギーに貢献">
                <h3 class="ttl">エネルギーの効率化や省エネルギーに貢献</h3>
                <p class="desc">多くのエネルギーがかかる各種設備。私たちはお客様が必要とされる設備をご提案するとともに、エネルギー分析を通じてエネルギーの効率化や省エネルギーに貢献いたします。</p>
              </div>
              <div class="col">
                <img src="/images/business/consulting/img_3.jpg" alt="図面の段階から快適環境のご提案">
                <h3 class="ttl cst-mg">図面の段階から快適環境のご提案</h3>
                <p class="desc">図面の段階からの設備設計ができるのも私たちの強みのひとつです。設計の前段階から、大きさに関わらずご要望に応じた設備を設計。満足のいく快適環境をご提案いたします。</p>
              </div>
            </div>
            <div class="btn-cont">
              <a href="" class="c-button01">
                <p class="c-button01--txt">
                  総合設備コンサルティングの実績
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
