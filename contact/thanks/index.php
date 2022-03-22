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
	<meta property="og:description" content="<?php echo DESCRIPTION ?>" />
	<meta property="og:url" content="<?php echo CANONICAL ?>" />

	<title>お問い合わせ | <?php echo SITE_NAME ?></title>

	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Competitive">
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
	<div id="AllBox">
		<header>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
		</header>

		<main id="Contact" class="sfm3">
			<section class="p-header01">
				<div class="p-header01--wrap">
					<div class="p-header01--text">
						<div class="container">
							<h1 class="p-header01--text__en">Contact</h1>
							<p class="p-header01--text__jp">お問い合わせ</p>
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
							<a href="" class="c-breadcrumbs--link">お問い合わせ</a>
						</li>
					</ul>
				</div>        
			</nav>
			<section class="form-sec">
				<div class="send_comp container">
					<p>
						この度は、つぼい工業株式会社へお問合わせ頂き、<br class="pc">誠にありがとうございました。<br><br>
						内容を確認後、ご入力されたメールアドレス宛にお返事致します。<br><br>なお、ご記入頂いたメールアドレス宛てに自動返信メールをお送りしております。<br>自動返信メールが届いていない場合は、メールアドレスが誤っている可能性がございます。<br>その際は大変お手数ですが、再度お問合わせくださいませ。</p>
					<div class="contact_back">
						<a href="/">トップへ戻る</a>
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
