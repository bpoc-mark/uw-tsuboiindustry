<?php $url = $_SERVER['REQUEST_URI'];
$str = explode('/', $url); ?>

<div class="header_inner">

	<div class="header_inner--left">
		<?php
		if ($str[1] == "") {
			echo '<h1 class="logo"><a href="/"><img src="/images/common/header_logo.svg" alt="つぼい工業株式会社"><img src="/images/common/header_logo_1.svg" class="pc" alt="つぼい工業株式会社"></a></h1>';
		} else {
			echo '<p class="logo"><a href="/"><img src="/images/common/header_logo.svg" alt="つぼい工業株式会社"><img src="/images/common/header_logo_1.svg" class="pc" alt="つぼい工業株式会社"></a></p>';
		}
		?>
	</div>

	<div class="header_inner--right">
		<nav class="nav">
			<ul class="nav__list">
				<li class="nav__item"><a class="nav__item__link" href="/" <?php if ($str[1] == "") {
																echo ' class="here"';
															} ?>>TOP</a></li>
				<li class="nav__item"><a class="nav__item__link" href="/" <?php if ($str[1] == "") {
																echo ' class="here"';
															} ?>>選ばれる理由</a></li>
				<li class="nav__item drop-down isOpen"><a class="nav__item__link sub_menu_clk" <?php if ($str[1] == "") {
																echo ' class="here"';
															} ?>>事業案内 <img src="/images/common/arrow_icon_header.svg" class="sp nav__item__link--sub_menu_arrow" alt=""></a>
					<div class="nav__item--sub-menu isOpen">
						<div class="wrap">
							<div class="wrap--left">
								<h4>Business information</h4>
								<p>事業案内<img src="/images/common/arrow_icon_header.svg" alt=""></p>
								<figure>
									<img src="/images/common/header_img_1.jpg" alt="">
								</figure>
							</div>
							<div class="wrap--right">
								<ul>
									<li>
										<a href="">事業案内</a>
									</li>
									<li>
										<a href="">総合設備<br class="sp">コンサルティング</a>
									</li>
									<li>
										<a href="">クリーンルーム</a>
									</li>
									<li>
										<a href="">空調換気設備工事</a>
									</li>
									<li>
										<a href="">冷熱設備工事</a>
									</li>
									<li>
										<a href="">排水衛生工事</a>
									</li>
									<li>
										<a href="">その他工事</a>
									</li>
									<li>
										<a href="">点検・修理・<br class="sp">メンテナンス</a>
									</li>
								</ul>
							</div>
						</div>
					</div>												
				</li>
				<li class="nav__item  drop-down"><a class="nav__item__link sub_menu_clk" <?php if ($str[1] == "") {
																echo ' class="here"';
															} ?>>会社案内 <img src="/images/common/arrow_icon_header.svg" class="sp nav__item__link--sub_menu_arrow" alt=""></a>
					<div class="nav__item--sub-menu">
						<div class="wrap">
							<div class="wrap--left">
								<h4>Company profile</h4>
								<p>会社案内<img src="/images/common/arrow_icon_header.svg" alt=""></p>
								<figure>
									<img src="/images/common/header_img_1.jpg" alt="">
								</figure>
							</div>
							<div class="wrap--right">
								<ul>
									<li>
										<a href="">代表あいさつ</a>
									</li>
									<li>
										<a href="">有資格者</a>
									</li>
									<li>
										<a href="">会社概要</a>
									</li>
									<li>
										<a href="">営業拠点</a>
									</li>
									<li>
										<a href="">沿革</a>
									</li>
									<li>
										<a href="">環境方針</a>
									</li>
									<li>
										<a href="">ISO認証取得</a>
									</li>
								</ul>
							</div>
						</div>
					</div>											
				</li>
				<li class="nav__item"><a class="nav__item__link" href="/" <?php if ($str[1] == "") {
																echo ' class="here"';
															} ?>>施工実績</a></li>
				<li class="nav__item"><a class="nav__item__link" href="/" <?php if ($str[1] == "") {
																echo ' class="here"';
															} ?>>よくあるご質問</a></li>
				<li class="nav__item"><a class="nav__item__link" href="/" <?php if ($str[1] == "") {
																echo ' class="here"';
															} ?>>採用情報 <img src="/images/common/arrow_header_icon.svg" class="nav__item__link--arrow" alt=""></a></li>
				<li class="nav__item--btn-contact"><a class="nav__item__link" href="/" <?php if ($str[1] == "") {
																echo ' class="here"';
															} ?>><img src="/images/common/mail_icon.svg" alt=""> お問い合わせ</a></li>
			</ul>
			<div class="overlay"></div>
		</nav>
		<nav class="nav_sp sp">
			<ul class="nav_sp--list">
				<li class="nav_sp--list--item">
					<a href="">
						<img src="/images/common/mail_icon_blue.svg" alt="">
					</a>
				</li>
				<li class="nav_sp--list--item">
					<div class="menu" id="nav_menu">
						<span class="line line-t"></span>
						<!-- <span class="line line-m"></span> -->
						<span class="line line-b"></span>
						<p></p>
					</div>
				</li>
			</ul>
		</nav>
	</div>

</div>

<div class="float_sp sp">
	<div class="wrap row">
		<div class="col">
			<a href="tel:053-438-111" class="btn_tel">
				<span class="tel">Tel.</span>053-438-111
			</a>
		</div>
		<div class="col">
			<a href="" class="btn_contact"><img src="/images/common/mail_icon.svg" alt="">メールフォーム</a>
		</div>
	</div>
</div>