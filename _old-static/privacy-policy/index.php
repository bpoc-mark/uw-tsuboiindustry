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

  <title>個人情報保護方針 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Privacy-Policy">
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
              <h1 class="p-header01--text__en">Privacy Policy</h1>
              <p class="p-header01--text__jp">個人情報保護方針</p>
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
              <a href="" class="c-breadcrumbs--link">個人情報保護方針</a>
            </li>
          </ul>
        </div>        
      </nav>
      <section class="privacy-section">
        <div class="wrapper">
          <div class="container">
            <ul class="privacy">
              <li class="privacy--list">
                <h3 class="ttl">個人情報の取得</h3>
                <p class="desc">サービスの提供にあたり、必要な個人情報につきましては、ご本人様から直接適正な方法で取得し、偽りその他不正な手段により取得することはありません。</p>
              </li>
              <li class="privacy--list">
                <h3 class="ttl">個人情報の利用目的</h3>
                <p class="desc">サービスのご提供ならびにそれらに関するご案内のため、また関連するアフターサービスに関する情報のご提供のために、お客さま情報を利用いたします。</p>
              </li>
              <li class="privacy--list">
                <h3 class="ttl">安全管理対策</h3>
                <p class="desc">当社は、個人情報を管理するために、セキュリティの確保・向上に鋭意努力しており、個人情報への外部からの不正なアクセス、個人情報の紛失・毀損・破壊・改ざん・漏えい、外部への不正な流出等への危険防止に対する合理的かつ適切な安全管理対策をおこないます。</p>
              </li>
              <li class="privacy--list">
                <h3 class="ttl">個人情報の第三者への提供</h3>
                <p class="desc">お客さまの個人情報は、以下の場合を除いて、第三者へ提供することはございません。</p>
                <ul class="decimal">
                  <li class="decimal--list">
                    <p class="desc">1. お客さまの同意がある場合</p>
                  </li>
                  <li class="decimal--list">
                    <p class="desc">2. 公的機関からの法令に基づく照会など、法令により第三者提供が認められている場合。</p>
                  </li>
                  <li class="decimal--list">
                    <p class="desc">3. 当社と守秘義務契約を締結している協力会社、提携会社および業務委託先等に対して、お客さまに明示した利用目的の達成に必要な範囲内で個人情報の取扱いを委託する場合。</p>
                  </li>
                </ul>
              </li>
              <li class="privacy--list">
                <h3 class="ttl">個人情報に関するお問い合わせ</h3>
                <p class="desc">
                  お客さまからの個人情報に関するお問合せにつきましては、所定の手続に基づき誠実に対応します。<br>
                  <br>
                  つぼい工業株式会社<br>
                  〒 433-8105 静岡県浜松市北区三方原町874-5<br>
                  TEL：<a href="tel:+053-438-1111">053-438-1111</a>(代)　／　<br class="sp">FAX：053-438-1118
                </p>
              </li>
            </ul>
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
  <script>
    $(document).ready(function(){
      $(document).on('click', '.faq--row--q', function(){
        if($(this).hasClass('isActive')){
          $(this).removeClass('isActive');
          $(this).next('.a-wrap').slideUp();
        }else{
          $(this).addClass('isActive');
          $(this).next('.a-wrap').slideDown();
        }
      });
    });
  </script>
</body>

</html>
