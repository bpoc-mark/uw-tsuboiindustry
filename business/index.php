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

  <title>事業案内 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Business">
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
				<h1 class="p-header01--text__en">Business information</h1>
				<p class="p-header01--text__jp">事業案内</p>
				</div>
			</div>
			<div class="p-header01--bg p-header01--bg__business"></div>
			</div>
		</section> 
		<nav class="c-breadcrumbs">
			<div class="container">
			<ul class="c-breadcrumbs--list">
				<li class="c-breadcrumbs--item">
				<a href="" class="c-breadcrumbs--link">TOP</a>
				</li>
				<li class="c-breadcrumbs--item">
				<a href="" class="c-breadcrumbs--link">事業案内</a>
				</li>
			</ul>
			</div>        
		</nav>
      	<section class="business-section">
			<div class="wrapper">
				<ul class="row">
					<li class="col bdr-top bdr-right">
						<h2 class="ttl">快適な環境と<br>空間のための設計・施工</h2>
						<p class="desc">水と熱にかかわるすべてを信頼と総合技術でサポート。快適な環境と空間のための設計・施工を行っています。設計の前段階からの総合コンサルティング、空調換気設備、冷熱設備、給排水衛生、そしてアフターメンテナンスまで、あらゆる場面でお客様のご要望にお応えいたします。</p>
					</li>
					<li class="col bdr-top">
						<a href="/business/consulting/">
							<h6 class="title">総合設備コンサルティング</h6>
							<div class="img_wrap">
								<img src="/images/top/sect_3/sect_3_img_1.jpg" alt="総合設備コンサルティング">
							</div>
							<p class="c-desc">お客様の立場に立って、快適な環境と空間を総合的にコンサルティング。ビルや工場、店舗、公共施設など設計の段階から各種設備の設計・レイアウト等をご提案いたします。</p>
							<span class="arrow_icon">
								<img src="/images/common/arrow_icon.svg"  alt="矢印アイコン">
							</span>
						</a>
					</li>
					<li class="col bdr-top bdr-right">
						<a href="/business/clean-room/">
							<h6>クリーンルーム</h6>
							<div class="img_wrap">
								<img src="/images/top/sect_3/sect_3_img_2.jpg" alt="クリーンルーム">
							</div>
							<p class="c-desc">恒温恒湿、除湿空調など確かな技術と経験で、お客様の要望に合わせた最適な空調環境を実現します。</p>
							<span class="arrow_icon">
								<img src="/images/common/arrow_icon.svg"  alt="矢印アイコン">
							</span>
						</a>
					</li>
					<li class="col bdr-top bdr-right">
						<a href="/business/air-conditioning/">
							<h6>空調換気設備工事</h6>
							<div class="img_wrap">
								<img src="/images/top/sect_3/sect_3_img_3.jpg" alt="空調換気設備工事">
							</div>
							<p class="c-desc">快適な空間のためのエアコンや換気システムなどの空調換気設備をサポートいたします。</p>
							<span class="arrow_icon">
								<img src="/images/common/arrow_icon.svg"  alt="矢印アイコン">
							</span>
						</a>
					</li>
					<li class="col bdr-top">
						<a href="/business/cold-equipment/">
							<h6>冷熱設備工事</h6>
							<div class="img_wrap">
								<img src="/images/top/sect_3/sect_3_img_4.jpg" alt="冷熱設備工事">
							</div>
							<p class="c-desc">大型冷凍冷蔵庫やショーケースなど、大切な商品を守る冷熱設備を、ご要望に合わせた設計・施工、設置いたします。</p>
							<span class="arrow_icon">
								<img src="/images/common/arrow_icon.svg"  alt="矢印アイコン">
							</span>
						</a>
					</li>
					<li class="col bdr-top bdr-right">
						<a href="/business/plumbing-sanitation/">
							<h6>給排水衛生工事</h6>
							<div class="img_wrap">
								<img src="/images/top/sect_3/sect_3_img_5.jpg" alt="給排水衛生工事">
							</div>
							<p class="c-desc">建物や使用する目的に合わせた設備工事で、快適で衛生的な環境をご提供いたします。</p>
							<span class="arrow_icon">
								<img src="/images/common/arrow_icon.svg"  alt="矢印アイコン">
							</span>
						</a>
					</li>
					<li class="col bdr-top bdr-right">
						<a href="/business/others/">
							<h6>その他工事</h6>
							<div class="img_wrap">
								<img src="/images/top/sect_3/sect_3_img_6.jpg" alt="その他工事">
							</div>
							<p class="c-desc">上下水道工事やガス工事、厨房設備にいたるまで、お客様が必要とされる工事を幅広く承っております。</p>
							<span class="arrow_icon">
								<img src="/images/common/arrow_icon.svg"  alt="矢印アイコン">
							</span>
						</a>
					</li>
					<li class="col bdr-top">
						<a href="/business/after-maintenance/">
							<h6>点検・修理・メンテナンス</h6>
							<div class="img_wrap">
								<img src="/images/top/sect_3/sect_3_img_7.jpg" alt="点検・修理・メンテナンス">
							</div>
							<p class="c-desc">建物等の快適な環境を維持するために重要なメンテナンス。蛇口ひとつからコンプレッサーまで点検・修理を承ります。</p>
							<span class="arrow_icon">
								<img src="/images/common/arrow_icon.svg"  alt="矢印アイコン">
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
