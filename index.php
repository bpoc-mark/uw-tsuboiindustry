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
	<meta property="og:type" content="website" /> <!-- 下層では「article」にしてください -->
	<meta property="og:description" content="<?php echo DESCRIPTION ?>" />
	<meta property="og:url" content="<?php echo CANONICAL ?>" />

	<title><?php echo SITE_NAME ?></title>

	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Top">
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
	<div id="AllBox">
		<header>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
		</header>

		<main>
			<section class="sect_1">
				<div class="wrapper">
					<div class="container">
						<div class="sticky">
							<div class="content">
								<h1>
									<span>
										<i>水と熱を極め</i>
									</span>
									<span>
										<i>未来へ繋ぐ</i>
									</span>
									<span>
										<i>技術と誇り。</i>
									</span>
								</h1>
								<h2>
									<span>
										<i>創業60年の安心と信頼</i>
									</span>
								</h2>
							</div>
						</div>
					</div>
					<div class="base">
						<div class="b_content">
							<figure class="bg_img">
							</figure>
							<div class="wall"></div>
						</div>
					</div>
					<div class="scroll_wrap">
						<a href="" class="scroll_wrap--btn">
							Scroll Down
							<span class="scroll_wrap--btn--line"></span>
						</a>
					</div>
				</div>
			</section>
			<section class="sect_2">
				<div class="wrapper">
					<div class="container">
						<div class="content">
							<p>浜松市をはじめ地域で60年。ビルや工場をはじめとする一般企業はもちろん、官公庁や教育機関、金融機関、医療施設、レジャー施設、商業施設など幅広い設備の設計・施工に携わってまいりました。私たちはこれまでの信頼と実績をもとに、お客様にご満足いただけるような最適なご提案をさせていただきます。</p>
							<a href="" class="btn_wrap">
								<span class="btn_wrap--circle"></span>
								<span class="btn_wrap--text" data-text="つぼい工業が選ばれる理由">つぼい工業が選ばれる理由</span>
							</a>
						</div>
					</div>
					<figure class="float_img">
						<img src="/images/top/sect_4/float_img_1.png" alt="">
					</figure>
				</div>
			</section>
			<section class="sect_3" id="sect_3">
				<div class="wrapper">
					<ul class="row">
						<li class="col bdr-top bdr-right">
							<div class="c-heading">
								<h3 class="c-heading--top">Business information</h3>
								<p class="c-heading--sub">事業案内</p>
							</div>
							<p class="desc">水と熱にかかわるすべてを信頼と総合技術でサポート。快適な環境と空間のための設計・施工を行っています。設計の前段階からの総合コンサルティング、空調換気設備、冷熱設備、給排水衛生、そしてアフターメンテナンスまで、あらゆる場面でお客様のご要望にお応えいたします。</p>
						</li>
						<li class="col bdr-top">
							<a href="">
								<h6 class="title">総合設備コンサルティング</h6>
								<div class="img_wrap">
									<img src="/images/top/sect_3/sect_3_img_1.jpg" alt="総合設備コンサルティング">
								</div>
								<span class="arrow_icon">
									<img src="/images/common/arrow_icon.svg"  alt="">
								</span>
							</a>
						</li>
						<li class="col bdr-top bdr-right">
							<a href="">
								<h6>クリーンルーム</h6>
								<div class="img_wrap">
									<img src="/images/top/sect_3/sect_3_img_2.jpg" alt="クリーンルーム">
								</div>
								<span class="arrow_icon">
									<img src="/images/common/arrow_icon.svg"  alt="">
								</span>
							</a>
						</li>
						<li class="col bdr-top bdr-right">
							<a href="">
								<h6>空調換気設備工事</h6>
								<div class="img_wrap">
									<img src="/images/top/sect_3/sect_3_img_3.jpg" alt="空調換気設備工事">
								</div>
								<span class="arrow_icon">
									<img src="/images/common/arrow_icon.svg"  alt="">
								</span>
							</a>
						</li>
						<li class="col bdr-top">
							<a href="">
								<h6>冷熱設備工事</h6>
								<div class="img_wrap">
									<img src="/images/top/sect_3/sect_3_img_4.jpg" alt="冷熱設備工事">
								</div>
								<span class="arrow_icon">
									<img src="/images/common/arrow_icon.svg"  alt="">
								</span>
							</a>
						</li>
						<li class="col bdr-top bdr-right">
							<a href="">
								<h6>給排水衛生工事</h6>
								<div class="img_wrap">
									<img src="/images/top/sect_3/sect_3_img_5.jpg" alt="給排水衛生工事">
								</div>
								<span class="arrow_icon">
									<img src="/images/common/arrow_icon.svg"  alt="">
								</span>
							</a>
						</li>
						<li class="col bdr-top bdr-right">
							<a href="">
								<h6>その他工事</h6>
								<div class="img_wrap">
									<img src="/images/top/sect_3/sect_3_img_6.jpg" alt="その他工事">
								</div>
								<span class="arrow_icon">
									<img src="/images/common/arrow_icon.svg"  alt="">
								</span>
							</a>
						</li>
						<li class="col bdr-top">
							<a href="">
								<h6>点検・修理・メンテナンス</h6>
								<div class="img_wrap">
									<img src="/images/top/sect_3/sect_3_img_7.jpg" alt="点検・修理・メンテナンス">
								</div>
								<span class="arrow_icon">
									<img src="/images/common/arrow_icon.svg"  alt="">
								</span>
							</a>
						</li>
					</ul>
				</div>
			</section>
			<section class="sect_4">
				<div class="wrapper">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="about--wrap">
									<li class="about_item">
										<a href="" class="about_item--link">
											<p>
												<span>01</span>
												施工実績
											</p>
											<span class="arrow_img">
												<img src="/images/common/arrow_icon_wh.svg" alt="">
											</span>
										</a>
									</li>
									<li class="about_item">
										<a href="" class="about_item--link">
											<p>
												<span>02</span>
												よくあるご質問
											</p>
											<span class="arrow_img">
												<img src="/images/common/arrow_icon_wh.svg" alt="">
											</span>
										</a>
									</li>
									<li class="about_item">
										<a href="" class="about_item--link">
											<p>
												<span>03</span>
												環境方針
											</p>
											<span class="arrow_img">
												<img src="/images/common/arrow_icon_wh.svg" alt="">
											</span>
										</a>
									</li>
								</ul>
							</div>
							<div class="col">
								<div class="c-heading">
									<h3 class="c-heading--top">About us</h3>
									<p class="c-heading--sub">つぼい工業について</p>
								</div>
								<p class="desc">「お客様に喜ばれる仕事により相互に厚い信頼を得て、適正利潤を確保して、我々の幸福と生活向上を計り我が社の永続的な発展を実現する事により、広く社会に貢献する。」を企業理念とし、また「水と熱に挑む、先進技術。」をキャッチフレーズとし今日まで日々精進して参りました。</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="sect_5">
				<div class="wrapper">
					<div class="row">
						<div class="col">
							<img src="/images/top/sect_5/sect_5_img_1.jpg" alt="採用情報">
						</div>
						<div class="col">
							<div class="c-heading">
								<h3 class="c-heading--top">Recruit</h3>
								<p class="c-heading--sub">採用情報</p>
							</div>
							<p class="desc">つぼい工業は働きやすい環境づくりにも本気で取り組んでいます。<br>一人ひとりがやりがいと成長を感じることのできる会社です。</p>
							<a href="https://www.tsuboi.biz/recruit/" target="_blank" class="btn_wrap">
								<span class="btn_wrap--circle"></span>
								<span class="btn_wrap--text" data-text="詳しくはこちら">詳しくはこちら</span>
							</a>
						</div>
					</div>
				</div>
			</section>
			<section class="sect_6">
				<div class="wrapper">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="c-heading">
									<h3 class="c-heading--top">News</h3>
									<p class="c-heading--sub">新着情報</p>
								</div>
							</div>
							<div class="col">
								<div class="to_list">
									<a href="">
									<svg xmlns="http://www.w3.org/2000/svg" width="22.33" height="15.63" viewBox="0 0 22.33 15.63"><g id="ae7ad000-5736-4529-8f84-6c7233c44b9c" data-name="Layer 2"><g id="a00df368-dcd9-436d-b1cf-9ae78076d5d4" data-name="レイヤー 1"><rect width="3.98" height="2.48"/><rect x="7.19" width="15.14" height="2.48" /><rect y="6.57" width="3.98" height="2.48" /><rect x="7.19" y="6.57" width="15.14" height="2.48" /><rect y="13.15" width="3.98" height="2.48"/><rect x="7.19" y="13.15" width="15.14" height="2.48"/></g></g></svg>
									</a>
								</div>
								<ul class="post">
									<li class="post__item">
										<a href="" class="post__link">
											<span class="post__link__date" >
												2021.09.01
											</span>
											<span class="post__link__title">
											ホームページをリニューアルしました！
											</span>
										</a>
									</li>
									<li class="post__item">
										<a href="" class="post__link">
											<span class="post__link__date" >
												2021.09.01
											</span>
											<span class="post__link__title">
											ホームページをリニューアルしました！
											</span>
										</a>
									</li>
									<li class="post__item">
										<a href="" class="post__link">
											<span class="post__link__date" >
												2021.09.01
											</span>
											<span class="post__link__title">
											ホームページをリニューアルしました！
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="sect_7">
				<div class="wrapper">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="c-heading">
									<h3 class="c-heading--top">Contact</h3>
									<p class="c-heading--sub">お問い合わせ</p>
								</div>
							</div>
							<div class="col">
								<p class="desc">お客様のご要望や目的に合わせて、最適なご提案や事例などをご案内します。<br>お気軽にご相談ください。</p>
								<div class="tel">
									<p>電話でお問い合わせ（24時間対応！）</p>
									<a href="tel:053-438-1111">
										<span>Tel.</span>053-438-1111
									</a>
								</div>
								<div class="btn_contact">
									<a href="">
										<img src="/images/common/mail_icon.svg" alt="お問い合わせ">
										メールでの<br class="pc">お問い合わせ
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

		<footer>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
		</footer>
	</div><!-- //AllBox -->
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>

	<script>
		$(".bg_img").vegas({
			slides: [
				{ src: "/images/top/sect_1/bg_img.jpg" },
				{ src: "/images/top/sect_1/bg_img-2.jpg" },
				{ src: "/images/top/sect_1/bg_img-3.jpg" }
			],
			transition: ['blur2'],
			animation: 'kenburns',
			animationDuration: 10000,
			timer: false,
			delay: 5000,
		});

		let allowed = false
		var w = $(window).width();
		if (w < 900) {
			allowed = true;
		}
		function float_img(){
			let sect2Height = $('.sect_2').height();
			let sect3Height = $('.sect_3').height();
			let sect4Height = $('.sect_4').height();
			let sect5Height = $('.sect_5').height();
			let sect6Height = $('.sect_6').height();
			let totalHeight = sect2Height + sect3Height + sect4Height + sect5Height + sect6Height;
			$('.float_img').css({"height": totalHeight });
		}
		float_img();

		function float_heroImg(){
			let heightPercentage = (allowed) ?  0.25 : 0.485;
			let sect1Height = $('.sect_1').height();
			let sect2Height = $('.sect_2').height() * heightPercentage;
			let totalHeight = sect1Height + sect2Height;
			console.log(heightPercentage)
			$('.sect_1 .wrapper .container .sticky').css({"height": totalHeight });
		}
		float_heroImg();
	</script>

	<script>
		const sect1 = document.querySelector('.sect_1 .wrapper');
		window.addEventListener('load', function() {
			sect1.classList.add('isOpened');
		});
		setTimeout( function () {
			sect1.classList.add('isOpened');
		}, 3000);
	</script>
</body>

</html>
