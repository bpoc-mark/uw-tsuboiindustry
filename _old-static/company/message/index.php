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

  <title>代表ごあいさつ | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Message">
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
              <h1 class="p-header01--text__en">Message</h1>
              <p class="p-header01--text__jp">代表ごあいさつ</p>
            </div>
          </div>
          <div class="p-header01--bg p-header01--bg__company"></div>
        </div>
      </section> 
      <nav class="c-breadcrumbs">
        <div class="container">
          <ul class="c-breadcrumbs--list">
            <li class="c-breadcrumbs--item">
              <a href="/" class="c-breadcrumbs--link">TOP</a>
            </li>
            <li class="c-breadcrumbs--item">
              <a href="/company/" class="c-breadcrumbs--link">会社案内</a>
            </li>
            <li class="c-breadcrumbs--item">
              <a href="" class="c-breadcrumbs--link">代表ごあいさつ</a>
            </li>
          </ul>
        </div>        
      </nav>
      <section class="message_section">
        <div class="wrapper">
          <div class="container">
            <img src="/images/company/message/img_1.jpg" alt="坪井 啓隼">
            <h2 class="ttl">進化発展し続ける企業を<br class="sp">目指し努力しております。</h2>
            <p class="desc">
              弊社は、創業以来、「我々は、お客様に喜ばれる仕事により相互に厚い信頼を得て、適正利潤を確保して、我々の幸福と生活向上を計り我が社の永続的な発展を実現する事により、広く社会に貢献する。」を企業理念とし、また「水と熱に挑む、先進技術。」をキャッチフレーズとし今日まで日々精進して参りました。<br>
              そして、その中で社員は、「誠実・創意工夫・信用」を行動の指針とし、常日頃から、お客様第一主義をモットーに活動を行い、進化発展し続ける企業を目指し努力しております。<br>
              また日々の自己研鑽においても、怠ることの無いよう切磋琢磨しております。<br>
              そういった、企業精神の積み重ねが、"つぼい工業の未来"につながっていくものと信じております。
            </p>
            <h3 class="representative"><span>代表取締役</span> 坪井 啓隼</h3>
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
