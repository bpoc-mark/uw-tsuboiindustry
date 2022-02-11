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

  <title>給排水衛生工事 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Plumbing-Sanitation">
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
              <h1 class="p-header01--text__en">Plumbing sanitation</h1>
              <p class="p-header01--text__jp">給排水衛生工事</p>
            </div>
          </div>
          <div class="p-header01--bg p-header01--bg__plumbing-sanitation"></div>
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
              <a href="" class="c-breadcrumbs--link">給排水衛生工事</a>
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
                安全・衛生面に配慮した<br>
                給排水衛生設備
                </h2>
              </div>
              <div class="col">
                <p class="desc">
                  日常生活や生産現場において欠かすことのできない水。私たちは工場や大型施設、マンションなど建物や使用する目的に合わせた設備工事で、用途に応じた水を衛生的に供給、使い終わった水を安全に排出するなど、快適な水回り環境をご提供いたします。<br>
                  また万が一に備える消火設備はスプリンクラーなど、建物の規模や用途ごとに適切かつ効率的な設備プランをご提案いたします。
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
                <picture >
                  <source srcset="/images/plumbing-sanitation/sp/img_1.jpg" media="(max-width: 899px)">
                  <img src="/images/plumbing-sanitation/img_1.jpg" alt="浄化槽">
                </picture>
                <h3 class="ttl">浄化槽</h3>
                <p class="desc">台所やトイレから流れた汚水を微生物の働きを利用してきれいにする浄化槽。浄化槽は多くの微生物が繁殖しやすく、働きやすくなるように設計されています。現在では合併処理浄化槽が一般的で、家庭用の小規模なものから向上や大型施設に合わせたサイズまで、必要に応じたものをご提案、設置いたします。</p>
              </div>
              <div class="col">
                <picture >
                  <source srcset="/images/plumbing-sanitation/sp/img_2.jpg" media="(max-width: 899px)">
                  <img src="/images/plumbing-sanitation/img_2.jpg" alt="消火設備工事">
                </picture>
                <h3 class="ttl">消火設備工事</h3>
                <p class="desc">万が一の際に人や製品、機器を守る備えは必要不可欠です。火災感知から放水までを自動に行うスプリンクラーなどを設置することで、火災に備えると同時に火災の被害を最小限に食い止めることができます。タンクやポンプの動作を確認するメンテナンスも行います。</p>
              </div>
            </div>
            <div class="btn-cont">
              <a href="" class="c-button01">
                <p class="c-button01--txt">
                  給排水衛生工事の実績
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
