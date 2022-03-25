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

  <title>施工実績 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Work">
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
              <h1 class="p-header01--text__en">Works</h1>
              <p class="p-header01--text__jp">施工実績</p>
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
              <a class="c-breadcrumbs--link">施工実績</a>
            </li>
          </ul>
        </div>        
      </nav>
      <section class="work-section">
        <div class="wrapper">
          <div class="container">
            <div class="category">
              <div class="lbl">
                <span>Category</span>
              </div>
              <div class="select">
                <select name="" id="" class="select-cat">
                  <option value="カテゴリーから絞る">カテゴリーから絞る</option>
                  <option value="カテゴリーから絞る">カテゴリーから絞る</option>
                  <option value="カテゴリーから絞る">カテゴリーから絞る</option>
                </select>
              </div>
            </div>
            <p class="desc sp">横にスクロール→で全体をご覧いただけます。</p>
            <div class="table-wrap">
              <table class="table-cat">
                <thead>
                  <tr>
                    <th>納入先</th>
                    <th>納入場所</th>
                    <th>完成年月</th> 
                    <th>工事名</th> 
                    <th>発注者又は <br>元請</th> 
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>新居町上水道事業</td>
                    <td>新居町</td>
                    <td>1.2</td>
                    <td>新居町上水道配水管布設工事</td>
                    <td>新居町</td>
                  </tr>
                  <tr>
                    <td>静岡県三ケ日青年の家</td>
                    <td>三ヶ日町</td>
                    <td>1.10</td>
                    <td>空調設備工事</td>
                    <td>静岡県</td>
                  </tr>
                  <tr>
                    <td>浜松市第5老人福祉センター</td>
                    <td>浜松市</td>
                    <td>2.6</td>
                    <td>機械設備工事</td>
                    <td>浜松市</td>
                  </tr>
                  <tr>
                    <td>浜松市第5老人福祉センター</td>
                    <td>浜松市</td>
                    <td>2.8</td>
                    <td>ソーラー設備工事</td>
                    <td>浜松市</td>
                  </tr>
                  <tr>
                    <td>浜松市立新津小学校</td>
                    <td>浜松市</td>
                    <td>2.8</td>
                    <td>下水道切替工事</td>
                    <td>浜松市</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- Wordpress -->
            <div class="page_navigation">
              <div class="wp-pagenavi">
                <a class="previouspostslink" href="#" rel="prev"></a>
                <a class="page smaller" href="#">1</a>
                <span class="current">2</span>
                <a class="page larger" href="#">3</a>
                <a class="nextpostslink" href="#" rel="next"></a>
              </div>
            </div>
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
</body>

</html>
