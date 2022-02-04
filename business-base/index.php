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

  <title>営業拠点 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Business-Base">
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
              <h1 class="p-header01--text__en">Business base</h1>
              <p class="p-header01--text__jp">営業拠点</p>
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
              <a href="" class="c-breadcrumbs--link">営業拠点</a>
            </li>
          </ul>
        </div>        
      </nav>
      <section class="map-section">
        <div class="wrapper">
          <div class="container">
            <ul class="map">
              <li class="map--item">
                <div class="row">
                  <div class="col">
                    <h3 class="ttl">本社</h3>
                    <table class="office-table">
                      <tbody>
                        <tr>
                          <th>住所</th>
                          <td>〒433-8105 <br class="sp">静岡県浜松市北区三方原町<br class="sp">874-5</td>
                        </tr>
                        <tr>
                          <th>TEL</th>
                          <td><a href="tel:053-438-1111">053-438-1111</a>（代）<br class="sp">（24時間対応）</td>
                        </tr>
                        <tr>
                          <th>FAX</th>
                          <td>053-438-1118</td>
                        </tr>
                        <tr>
                          <th>営業時間</th>
                          <td>8:30〜18:00</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="col">
                  <iframe class="map_frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3276.9548461376803!2d137.71887350087414!3d34.781912012872496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601b208becc118db%3A0xd77e1a0bdcfc8b8c!2s874-5%20Mikataharach%C5%8D%2C%20Kita%20Ward%2C%20Hamamatsu%2C%20Shizuoka%20433-8105%2C%20Japan!5e0!3m2!1sen!2sph!4v1643937113550!5m2!1sjp!2sjp" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
                </div>
              </li>
              <li class="map--item">
                <div class="row">
                  <div class="col">
                    <h3 class="ttl">掛川支店</h3>
                    <table class="office-table">
                      <tbody>
                        <tr>
                          <th>住所</th>
                          <td>〒436-0042 <br class="sp">静岡県掛川市二瀬川<br class="sp">4-21</td>
                        </tr>
                        <tr>
                          <th>TEL</th>
                          <td><a href="tel:0537-23-2228">0537-23-2228</a>（代） </td>
                        </tr>
                        <tr>
                          <th>FAX</th>
                          <td>0537-23-2220</td>
                        </tr>
                        <tr>
                          <th>営業時間</th>
                          <td>8:30〜18:00</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="col">
                    <iframe class="map_frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3276.9547756874763!2d137.71798621559563!3d34.78191378637128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601b208becc118db%3A0xd77e1a0bdcfc8b8c!2s874-5%20Mikataharach%C5%8D%2C%20Kita%20Ward%2C%20Hamamatsu%2C%20Shizuoka%20433-8105%2C%20Japan!5e0!3m2!1sen!2sph!4v1643939175284!5m2!1sjp!2sjp" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
                </div>
              </li>
              <li class="map--item">
                <div class="row">
                  <div class="col">
                    <h3 class="ttl">磐田営業所</h3>
                    <table class="office-table">
                      <tbody>
                        <tr>
                          <th>住所</th>
                          <td>〒438-0838 <br class="sp">静岡県磐田市小立野<br class="sp">210</td>
                        </tr>
                        <tr>
                          <th>TEL</th>
                          <td><a href="tel:0538-39-2282">0538-39-2282</a>（代） </td>
                        </tr>
                        <tr>
                          <th>FAX</th>
                          <td>0538-39-2283</td>
                        </tr>
                        <tr>
                          <th>営業時間</th>
                          <td>8:30〜18:00</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="col">
                    <iframe class="map_frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.1204920318837!2d137.8158782155946!3d34.72735708929694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ae6c8ad521a43%3A0x12a39ae7db59c46e!2s210%20Kodateno%2C%20Iwata%2C%20Shizuoka%20438-0838%2C%20Japan!5e0!3m2!1sen!2sph!4v1643939317632!5m2!1sjp!2sjp" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
                </div>
              </li>
              <li class="map--item">
                <div class="row">
                  <div class="col">
                    <h3 class="ttl">湖西営業所</h3>
                    <table class="office-table">
                      <tbody>
                        <tr>
                          <th>住所</th>
                          <td>〒431-0421 <br class="sp">静岡県湖西市新所<br class="sp">3135-2</td>
                        </tr>
                        <tr>
                          <th>TEL</th>
                          <td><a href="tel:053-573-2122">053-573-2122</a>（代） </td>
                        </tr>
                        <tr>
                          <th>FAX</th>
                          <td>053-573-2123</td>
                        </tr>
                        <tr>
                          <th>営業時間</th>
                          <td>8:30〜18:00</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="col">
                    <iframe class="map_frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.891325229227!2d137.5249986155948!3d34.73313358898754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601b2bd89b9c5449%3A0x29f579f6055ef715!2s3135-2%20Shinjo%2C%20Kosai%2C%20Shizuoka%20431-0421%2C%20Japan!5e0!3m2!1sen!2sph!4v1643939428843!5m2!1sjp!2sjp" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/company-card-footer.php"); ?>
    </main>

    <footer>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
    </footer>
  </div><!-- //AllBox -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
</body>

</html>
