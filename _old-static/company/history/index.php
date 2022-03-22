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

  <title>沿革 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="History">
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
              <h1 class="p-header01--text__en">History</h1>
              <p class="p-header01--text__jp">沿革</p>
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
              <a class="c-breadcrumbs--link">沿革</a>
            </li>
          </ul>
        </div>        
      </nav>
      <section class="history-section">
        <div class="wrapper">
          <div class="container">
            <table class="history-table">
              <tbody>
                <tr>
                  <th>1946年4月</th>
                  <td>【創業】 小型アンモニア冷凍機の製造メーカーとして販売工事を個人にて始める</td>
                </tr>
                <tr>
                  <th>1954年5月</th>
                  <td>つぼい工業株式会社設立　資本金800,000円</td>
                </tr>
                <tr>
                  <th>1962年3月</th>
                  <td>増資第一回　資本金1,600,000円とする</td>
                </tr>
                <tr>
                  <th>1963年3月</th>
                  <td>増資第二回　資本金2,560,000円とする</td>
                </tr>
                <tr>
                  <th>1963年8月</th>
                  <td>防衛庁工事登録申請認可</td>
                </tr>
                <tr>
                  <th>1969年3月</th>
                  <td>増資第三回　資本金5,000,000円とする</td>
                </tr>
                <tr>
                  <th>1970年5月</th>
                  <td>増資第四回　資本金10,000,000円とする</td>
                </tr>
                <tr>
                  <th>1970年6月</th>
                  <td>本社を浜松市野口町49番地より浜松市和田町582-1番地に移転する</td>
                </tr>
                <tr>
                  <th>1971年2月</th>
                  <td>増資第五回　資本金25,000,000円とする</td>
                </tr>
                <tr>
                  <th>1973年2月</th>
                  <td>掛川支店開設</td>
                </tr>
                <tr>
                  <th>1976年1月</th>
                  <td>浜松市より給水工事公認工事業者として認可される、浜松市水道課指令第51号</td>
                </tr>
                <tr>
                  <th>1978年8月</th>
                  <td>浜松市より下水道工事公認工事業者として認可される、浜松市下水道登録第27号</td>
                </tr>
                <tr>
                  <th>1985年9月</th>
                  <td>本社を浜松市三方原町874-5に移転する</td>
                </tr>
                <tr>
                  <th>2000年9月</th>
                  <td>磐田営業所開設</td>
                </tr>
                <tr>
                  <th>2001年8月</th>
                  <td>静岡県知事許可（特定）第13-340号</td>
                </tr>
                <tr>
                  <th>2003年1月</th>
                  <td>ISO9001：2000（JIS Q 9001：2000）を取得</td>
                </tr>
                <tr>
                  <th>2005年10月</th>
                  <td>エコアクション21認証</td>
                </tr>
              </tbody>
            </table>
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
