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

  <title>環境方針 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Environment-Policy">
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
              <h1 class="p-header01--text__en">Environmental policy</h1>
              <p class="p-header01--text__jp">環境方針</p>
            </div>
          </div>
          <div class="p-header01--bg p-header01--bg__company"></div>
        </div>
      </section> 
      <nav class="c-breadcrumbs">
        <div class="container">
          <ul class="c-breadcrumbs--list">
            <li class="c-breadcrumbs--item">
              <a href="" class="c-breadcrumbs--link">TOP</a>
            </li>
            <li class="c-breadcrumbs--item">
              <a href="" class="c-breadcrumbs--link">会社案内</a>
            </li>
            <li class="c-breadcrumbs--item">
              <a href="" class="c-breadcrumbs--link">環境方針</a>
            </li>
          </ul>
        </div>        
      </nav>
      <section class="environment-section">
        <div class="wrapper">
          <div class="container">
            <div class="content">
              <ul class="list">
                <li class="list--item">
                  <h2 class="ttl">基本理念</h2>
                  <p class="desc">我社は、地球環境保全が人類共通の最重要課題の一つであることを認識し、事業運営を通じ環境への優しさを優先し、地球環境保護と省エネルギーの推進に取り組みます。</p>
                  <img src="/images/company/environment-policy/img_1.jpg" alt="基本理念" class="img-float">
                </li>
                <li class="list--item">
                  <h2 class="ttl">行動方針</h2>
                  <ul class="roman-list">
                    <li class="roman-list--item">
                      <p class="roman-list--desc">Ⅰ. 環境目標を設定し、環境負荷の削減と環境保全活動に積極的に取り組み、継続的な改善を行う。</p>
                      <ul class="decimal-list">
                        <li class="decimal--item">
                          <p class="decimal-list--desc">1. フロン類回収処理を積極的に推進。</p>
                        </li>
                        <li class="decimal--item">
                          <p class="decimal-list--desc">2. 二酸化炭素の排出量の低減と省エネルギーの推進。（ガソリン・軽油・電力等の低減）</p>
                        </li>
                        <li class="decimal--item">
                          <p class="decimal-list--desc">3. 産業廃棄物の削減。（分別処理とリサイクルの研究）</p>
                        </li>
                        <li class="decimal--item">
                          <p class="decimal-list--desc">4. グリーン購入の推進（事務用品・建設資材等）</p>
                        </li>
                        <li class="decimal--item">
                          <p class="decimal-list--desc">5. 水資源の節約と、雨水の活用の研究。</p>
                        </li>
                      </ul>
                    </li>
                    <li class="roman-list--item">
                      <p class="roman-list--desc">Ⅱ. 環境に関する法規・条例の遵守。</p>
                    </li>
                    <li class="roman-list--item">
                      <p class="roman-list--desc">Ⅲ. 全社員にこの環境方針を明示し、環境意識の向上と環境保全活動の定着に努める。</p>
                    </li>
                  </ul>
                  <ul class="square-list">
                    <li class="square-list--item">
                      <p class="square-list--desc">■ 制定年月日：2007年11月1日</p>
                    </li>
                    <li class="square-list--item">
                      <p class="square-list--desc">■ 改定年月日：2011年10月1日</p>
                    </li>
                    <li class="square-list--item">
                      <p class="square-list--desc">■ つぼい工業株式会社</p>
                    </li>
                    <li class="square-list--item">
                      <p class="square-list--desc">■ 代表取締役  坪井 啓隼</p>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/company-card-footer.php"); ?>
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
