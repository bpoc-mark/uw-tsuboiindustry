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

  <title>冷熱設備工事 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Cold-Equipment">
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
              <h1 class="p-header01--text__en">Cold equipment</h1>
              <p class="p-header01--text__jp">冷熱設備工事</p>
            </div>
          </div>
          <div class="p-header01--bg p-header01--bg__cold-equipment"></div>
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
              <a href="" class="c-breadcrumbs--link">冷熱設備工事</a>
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
                大切な商品を守る<br>
                冷熱設備
                </h2>
              </div>
              <div class="col">
                <p class="desc">
                  大型冷凍冷蔵庫やショーケースなど、大切な商品を守る冷熱設備。ご要望に合わせた設計・施工、設置いたします。また機器のトラブルは営業時間内に起こるとは限りません。<br>
                  私たちは警備会社と連携し、365日24時間体制で受付対応いたします。
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
                  <source srcset="/images/business/cold-equipment/sp/img_1.jpg" media="(max-width: 899px)">
                  <img src="/images/business/cold-equipment/img_1.jpg" alt="大型冷凍・冷蔵庫">
                </picture>
                <h3 class="ttl">大型冷凍・冷蔵庫</h3>
                <p class="desc">大型冷凍冷蔵庫は、車の出し入れが可能な業務用の倉庫型や漁協などで使われる製氷機など幅広い用途で使われています。お客様が必要とされる大きさや温度に合わせて設計いたします。</p>
              </div>
              <div class="col">
                <picture >
                  <source srcset="/images/business/cold-equipment/sp/img_2.jpg" media="(max-width: 899px)">
                  <img src="/images/business/cold-equipment/img_2.jpg" alt="ショーケース">
                </picture>
                <h3 class="ttl">ショーケース</h3>
                <p class="desc">ショーケースの目的は、商品を冷やすためだけではなく、効率よく陳列・ディスプレイでき、購買意欲を刺激するレイアウトでなければなりません。豊富な経験から得たノウハウをいかしたご提案をするとともに、室外機の設置場所についてのご相談も承ります。</p>
              </div>
            </div>
            <div class="btn-cont">
              <a href="" class="c-button01">
                <p class="c-button01--txt">
                  冷熱設備工事の実績
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
