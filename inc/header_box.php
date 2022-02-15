<?php $url = $_SERVER['REQUEST_URI'];
$str = explode('/', $url); ?>

<div class="header_inner">

	<div class="header_inner--left">
		<?php
		if ($str[1] == "") {
			echo '<h1 class="logo"><a href="/"><img src="/images/common/header_logo.svg" alt="つぼい工業株式会社"></a></h1>';
		} else {
			echo '<p class="logo"><a href="/"><img src="/images/common/header_logo.svg" alt="つぼい工業株式会社"></a></p>';
		}
		?>
	</div>

	<div class="header_inner--right">
		<nav class="nav">
			<ul class="nav__list">
				<li class="nav__item"><a class="nav__item__link" href="/" <?php if ($str[1] == "") {
																echo ' class="here"';
															} ?>>TOP</a></li>
				<li class="nav__item"><a class="nav__item__link" href="/reason/" <?php if ($str[1] == "") {
																echo ' class="here"';
															} ?>>選ばれる理由</a></li>
				<li class="nav__item drop-down"><a class="nav__item__link sub_menu_clk" <?php if ($str[1] == "") {
																echo ' class="here"';
															} ?>>事業案内 <img src="/images/common/arrow_icon_header.svg" class="sp nav__item__link--sub_menu_arrow" alt=""></a>
					<div class="nav__item--sub-menu">
						<div class="wrap">
							<div class="wrap--left">
								<h4>Business information</h4>
								<a href="/#sect_3">事業案内<span><img src="/images/common/arrow_icon_header.svg" alt=""></span></a>
								<figure>
									<img src="/images/common/header_img_2.jpg" alt="">
								</figure>
							</div>
							<div class="wrap--right">
								<ul>
									<li>
										<a href="/business/">事業案内TOP</a>
									</li>
									<li>
										<a href="/business/consulting/">総合設備<br class="sp">コンサルティング</a>
									</li>
									<li>
										<a href="/business/plumbing-sanitation/">排水衛生工事</a>
									</li>
									<li>
										<a href="/business/clean-room/">クリーンルーム</a>
									</li>
									<li>
										<a href="/business/others/">その他工事</a>
									</li>
									<li>
										<a href="/business/air-conditioning/">空調換気設備工事</a>
									</li>
									<li>
										<a href="/business/after-maintenance/">点検・修理・<br class="sp">メンテナンス</a>
									</li>
									<li>
										<a href="/business/cold-equipment/">冷熱設備工事</a>
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
								<a href="/company/">会社案内<span><img src="/images/common/arrow_icon_header.svg" alt=""></span></a>
								<figure>
									<img src="/images/common/header_img_1.jpg" alt="">
								</figure>
							</div>
							<div class="wrap--right">
								<ul>
									<li>
										<a href="/company/">会社案内TOP</a>
									</li>
									<li>
										<a href="/company/message/">代表あいさつ</a>
									</li>
									<li>
										<a href="/company/qualified-person/">有資格者</a>
									</li>
									<li>
										<a href="/company/profile/">会社概要</a>
									</li>
									<li>
										<a href="/company/business-base/">営業拠点</a>
									</li>
									<li>
										<a href="/company/history/">沿革</a>
									</li>
									<li>
										<a href="/company/environment-policy/">環境方針</a>
									</li>
									<li>
										<a href="/company/iso/">ISO認証取得</a>
									</li>
								</ul>
							</div>
						</div>
					</div>											
				</li>
				<li class="nav__item"><a class="nav__item__link" href="/business/after-maintenance/" <?php if ($str[1] == "") {
																echo ' class="here"';
															} ?>>施工実績</a></li>
				<li class="nav__item"><a class="nav__item__link" href="/faq/" <?php if ($str[1] == "") {
																echo ' class="here"';
															} ?>>よくあるご質問</a></li>
				<li class="nav__item"><a class="nav__item__link" href="https://www.tsuboi.biz/recruit/" target="_blank" <?php if ($str[1] == "") {
																echo ' class="here"';
															} ?>>採用情報 <img src="/images/common/arrow_header_icon.svg" class="nav__item__link--arrow" alt=""></a></li>
				<li class="nav__item--btn-contact"><a class="nav__item__link" href="/contact/" <?php if ($str[1] == "") {
																echo ' class="here"';
															} ?>><img src="/images/common/mail_icon.svg" alt="お問い合わせ"> お問い合わせ</a></li>
			</ul>
			<div class="overlay"></div>
		</nav>
		<nav class="nav_sp sp">
			<ul class="nav_sp--list">
				<li class="nav_sp--list--item">
					<div class="menu" id="nav_menu">
						<span class="line line-t"></span>
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
			<a href="/contact/" class="btn_contact"><img src="/images/common/mail_icon.svg" alt="お問い合わせ">メールフォーム</a>
		</div>
	</div>
</div>