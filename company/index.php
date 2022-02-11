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

  <title>会社案内 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Company">
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
				<h1 class="p-header01--text__en">Company</h1>
				<p class="p-header01--text__jp">会社案内</p>
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
			</ul>
			</div>        
		</nav>
		<section class="company-section">
			<div class="wrapper">
				<ul class="row">
					<li class="col bdr-top bdr-right">
							<h2 class="ttl">一貫体制で提供する先進技術</h2>
						<p class="desc">「お客様に喜ばれる仕事により相互に厚い信頼を得て、適正利潤を確保して、我々の幸福と生活向上を計り我が社の永続的な発展を実現する事により、広く社会に貢献する。」を企業理念とし、また「水と熱に挑む、先進技術。」をキャッチフレーズとし今日まで日々精進して参りました。</p>
					</li>
					<li class="col bdr-top">
						<a href="/message/">
							<h6 class="title">代表ごあいさつ</h6>
							<div class="img_wrap">
								<img src="/images/company/img_1.jpg" alt="代表ごあいさつ">
							</div>
							<span class="arrow_icon">
								<img src="/images/common/arrow_icon.svg"  alt="">
							</span>
						</a>
					</li>
					<li class="col bdr-top bdr-right">
						<a href="/company-profile/">
							<h6>会社概要</h6>
							<div class="img_wrap">
								<img src="/images/company/img_2.jpg" alt="会社概要">
							</div>
							<span class="arrow_icon">
								<img src="/images/common/arrow_icon.svg"  alt="">
							</span>
						</a>
					</li>
					<li class="col bdr-top bdr-right">
						<a href="/history/">
							<h6>沿革</h6>
							<div class="img_wrap">
								<img src="/images/company/img_3.jpg" alt="沿革">
							</div>
							<span class="arrow_icon">
								<img src="/images/common/arrow_icon.svg"  alt="">
							</span>
						</a>
					</li>
					<li class="col bdr-top">
						<a href="/iso/">
							<h6>ISO認証取得</h6>
							<div class="img_wrap">
								<img src="/images/company/img_4.jpg" alt="ISO認証取得">
							</div>
							<span class="arrow_icon">
								<img src="/images/common/arrow_icon.svg"  alt="">
							</span>
						</a>
					</li>
					<li class="col bdr-top bdr-right">
						<a href="/qualified-person/">
							<h6>有資格者</h6>
							<div class="img_wrap">
								<img src="/images/company/img_5.jpg" alt="有資格者">
							</div>
							<span class="arrow_icon">
								<img src="/images/common/arrow_icon.svg"  alt="">
							</span>
						</a>
					</li>
					<li class="col bdr-top bdr-right">
						<a href="/business-base/">
							<h6>営業拠点</h6>
							<div class="img_wrap">
								<img src="/images/company/img_6.jpg" alt="営業拠点">
							</div>
							<span class="arrow_icon">
								<img src="/images/common/arrow_icon.svg"  alt="">
							</span>
						</a>
					</li>
					<li class="col bdr-top">
						<a href="/environment-policy/">
							<h6>環境方針</h6>
							<div class="img_wrap">
								<img src="/images/company/img_7.jpg" alt="環境方針">
							</div>
							<span class="arrow_icon">
								<img src="/images/common/arrow_icon.svg"  alt="">
							</span>
						</a>
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
