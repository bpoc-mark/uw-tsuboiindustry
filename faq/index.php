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

  <title>よくあるご質問 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="FAQ">
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
              <h1 class="p-header01--text__en">FAQ</h1>
              <p class="p-header01--text__jp">よくあるご質問</p>
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
              <a href="" class="c-breadcrumbs--link">よくあるご質問</a>
            </li>
          </ul>
        </div>        
      </nav>
      <section class="faq-section">
        <div class="wrapper">
          <div class="container">
            <ul class="list">
              <?php
                $list = [
                  ['質問内容がはいります質問内容がはいります', '水と熱にかかわるすべてを信頼と総合技術でサポート。快適な環境と空間のための設計・施工を行っています。設計の前段階からの総合コンサルティング、空調換気設備、冷熱設備、給排水衛生、そしてアフターメンテナンスまで、あらゆる場面でお客様のご要望にお応えいたします。'],
                  ['質問内容がはいります質問内容がはいります', '水と熱にかかわるすべてを信頼と総合技術でサポート。快適な環境と空間のための設計・施工を行っています。設計の前段階からの総合コンサルティング、空調換気設備、冷熱設備、給排水衛生、そしてアフターメンテナンスまで、あらゆる場面でお客様のご要望にお応えいたします。'],
                  ['質問内容がはいります質問内容がはいります', '水と熱にかかわるすべてを信頼と総合技術でサポート。快適な環境と空間のための設計・施工を行っています。設計の前段階からの総合コンサルティング、空調換気設備、冷熱設備、給排水衛生、そしてアフターメンテナンスまで、あらゆる場面でお客様のご要望にお応えいたします。'],
                  ['質問内容がはいります質問内容がはいります', '水と熱にかかわるすべてを信頼と総合技術でサポート。快適な環境と空間のための設計・施工を行っています。設計の前段階からの総合コンサルティング、空調換気設備、冷熱設備、給排水衛生、そしてアフターメンテナンスまで、あらゆる場面でお客様のご要望にお応えいたします。'],
                  ['質問内容がはいります質問内容がはいります', '水と熱にかかわるすべてを信頼と総合技術でサポート。快適な環境と空間のための設計・施工を行っています。設計の前段階からの総合コンサルティング、空調換気設備、冷熱設備、給排水衛生、そしてアフターメンテナンスまで、あらゆる場面でお客様のご要望にお応えいたします。'],
                  ['質問内容がはいります質問内容がはいります', '水と熱にかかわるすべてを信頼と総合技術でサポート。快適な環境と空間のための設計・施工を行っています。設計の前段階からの総合コンサルティング、空調換気設備、冷熱設備、給排水衛生、そしてアフターメンテナンスまで、あらゆる場面でお客様のご要望にお応えいたします。'],
                  ['質問内容がはいります質問内容がはいります', '水と熱にかかわるすべてを信頼と総合技術でサポート。快適な環境と空間のための設計・施工を行っています。設計の前段階からの総合コンサルティング、空調換気設備、冷熱設備、給排水衛生、そしてアフターメンテナンスまで、あらゆる場面でお客様のご要望にお応えいたします。'],
                  ['質問内容がはいります質問内容がはいります', '水と熱にかかわるすべてを信頼と総合技術でサポート。快適な環境と空間のための設計・施工を行っています。設計の前段階からの総合コンサルティング、空調換気設備、冷熱設備、給排水衛生、そしてアフターメンテナンスまで、あらゆる場面でお客様のご要望にお応えいたします。'],
                  ['質問内容がはいります質問内容がはいります', '水と熱にかかわるすべてを信頼と総合技術でサポート。快適な環境と空間のための設計・施工を行っています。設計の前段階からの総合コンサルティング、空調換気設備、冷熱設備、給排水衛生、そしてアフターメンテナンスまで、あらゆる場面でお客様のご要望にお応えいたします。'],
                ];
                foreach ($list as $key => $el) :
              ?>
                <li class="list--item">
                  <div class="faq">
                    <div class="faq--row faq--row--q">
                      <span class="faq--row--lbl">Q .</span>
                      <h3 class="faq--row--right faq--row--question"><?= $el[0] ?></h3>
                    </div>
                    <div class="a-wrap">
                      <div class="faq--row faq--row--a">
                        <span class="faq--row--lbl faq--row--lbl--answer">A .</span>
                        <h3 class="faq--row--right faq--row--answer"><?= $el[1] ?></h3>
                      </div>
                    </div>
                  </div>
                </li>
              <?php endforeach; ?>
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
