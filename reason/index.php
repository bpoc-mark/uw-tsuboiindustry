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

  <title>選ばれる理由 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Reason">
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
              <h1 class="p-header01--text__en">Reason</h1>
              <p class="p-header01--text__jp">選ばれる理由</p>
            </div>
          </div>
          <div class="p-header01--bg p-header01--bg__faq"></div>
        </div>
      </section> 
      <nav class="c-breadcrumbs">
        <div class="container">
          <ul class="c-breadcrumbs--list">
            <li class="c-breadcrumbs--item">
              <a href="/" class="c-breadcrumbs--link">TOP</a>
            </li>
            <li class="c-breadcrumbs--item">
              <a class="c-breadcrumbs--link">選ばれる理由</a>
            </li>
          </ul>
        </div>        
      </nav>
      <section class="reason-section">
        <div class="wrapper">
          <ul class="reason">
            <li class="reason--item">
              <div class="row">
                <div class="col">
                  <div class="content">
                    <span class="num">01</span>
                    <h6 class="ttl-en">Performance</h6>
                    <h3 class="ttl-jp">豊富な施工実績</h3>
                    <p class="desc">浜松市をはじめ地域で60年。ビルや工場をはじめとする一般企業はもちろん、官公庁や教育機関、金融機関、医療施設、レジャー施設、商業施設など幅広い設備の設計・施工に携わってまいりました。私たちはこれまでの信頼と実績をもとに、お客様にご満足いただけるような最適なご提案をさせていただきます。</p>
                  </div>
                </div>
                <div class="col">
                  <img src="/images/reason/img_1.jpg" alt="豊富な施工実績">
                </div>
              </div>
            </li>
            <li class="reason--item reason--item--reverse">
              <div class="row">
                <div class="col">
                  <div class="content">
                    <span class="num">02</span>
                    <h6 class="ttl-en">Performance</h6>
                    <h3 class="ttl-jp">優れた技術</h3>
                    <p class="desc">お客様と直接お会いするサービスマンや職人の資格取得を推奨するなど、社員の能力・自覚・心構えの向上のためにさまざまな社員教育に取り組んでおります。そのため全社員が幅広い知識と資格を保有。優れた技術と責任・誠意を持って、設計・施工・アフターメンテナンスをいたします。</p>
                  </div>
                </div>
                <div class="col">
                  <img src="/images/reason/img_2.jpg" alt="優れた技術">
                </div>
              </div>
            </li>
            <li class="reason--item reason--item--topimg">
              <div class="row">
                <div class="col">
                  <div class="content">
                    <span class="num">03</span>
                    <h6 class="ttl-en">Integrated system</h6>
                    <h3 class="ttl-jp">信頼の一貫体制</h3>
                    <p class="desc">設備設計・施工、その後のメンテナンスまで。東京・大阪にグループ会社を持ち、すべてが自社での一貫体制ならではの信頼と総合力で全国のお客様のご要望にお応えしております。特にメンテナンス（修理・保守）についても「スピードが命」をモットーに365日24時間体制で受付（静岡県西部地域）、自社のサービスマンが迅速に対応いたします。</p>
                  </div>
                </div>
                <div class="col">
                  <picture >
                    <source srcset="/images/reason/sp/img_3.png" media="(max-width: 899px)">
                    <img src="/images/reason/img_3.png" alt="信頼の一貫体制">
                  </picture>
                </div>
              </div>
            </li>
          </ul>
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
