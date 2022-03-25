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

		<main id="Contact" class="sfm1">
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
							<a href="/" class="c-breadcrumbs--link">TOP</a>
						</li>
						<li class="c-breadcrumbs--item">
							<a class="c-breadcrumbs--link">お問い合わせ</a>
						</li>
					</ul>
				</div>        
			</nav>
			<section class="form-sec">
				<div class="container">
					<div class="form_wrap">
						<p class="desc">
							当社のお問い合わせページをご覧いただきましてありがとうございます。<br>
							お問い合わせは下記フォーム、またはお電話にてお問い合わせください。<br>
							お問い合わせフォームは「<span>*</span>」マークの必須項目をご記入の上、「入力内容の確認画面へ」を押してください。後日、弊社担当者よりご連絡致します。<br>
							お客様のご要望や目的に合わせて、最適なご提案や事例などをご案内します。お気軽にご相談ください。 
						</p>
						<div class="tel-wrap">
							<p class="tel-desc">電話でお問い合わせ（24時間対応！）</p>
							<a class="tel-num" href="tel:053-438-1111"><span>Tel</span>.053-438-1111</a>
						</div>
						<form method="post" name="sfm-form" id="sfm-form" action="./">
							<table>
								<tr>
									<th>お名前<span class="need">*</span></th>
									<td><input type="text" name="name_s" value="" title="" placeholder="例： 山田　太郎"></td>
								</tr>
								
								<tr>
									<th>ふりがな<span class="need">*</span></th>
									<td><input type="text" name="furigana_s" value="" title="" placeholder="例： やまだ　たろう"></td>
								</tr>
								
								<tr>
									<th>会社名</th>
									<td><input type="text" name="company" value="" title="" placeholder="例： つぼい工業株式会社"></td>
								</tr>
								
								<tr>
									<th>会社名ふりがな</th>
									<td><input type="text" name="companyfurigana" value="" title="" placeholder="例： つぼいこうぎょうかぶしきがいしゃ"></td>
								</tr>
								
								<tr>
									<th>部署・役職</th>
									<td><input type="text" name="department" value="" title="" placeholder="例： 総務部"></td>
								</tr>

								<tr class="address">
									<th>ご住所</th>
									<td>
										<span class="zip-wrap">
											<input class="zip" type="text" name="zip" size="10" maxlength="8" placeholder="例： 433-8105">
										</span>
										<input class="ad_btn" type="button" value="※ 住所が自動的に表示されます"><br>
										<input class="text02" type="text" name="address" size="60" placeholder="例： 静岡県浜松市北区三方原町874-5">
									</td>
								</tr>

								<tr>
									<th>お電話番号<span class="need">*</span></th>
									<td><input type="text" name="tel_s" value="" title="" placeholder="例： 053-438-1111"></td>
								</tr>

								<tr>
									<th>メールアドレス<span class="need">*</span></th>
									<td><input type="text" name="email_s" value="" title="" placeholder="例： abc@sample.com"></td>
								</tr>

								<tr>
									<th>お問い合わせ内容</th>
									<td><textarea name="message" title="" placeholder="お問い合わせ内容をご記入ください。"></textarea></td>
								</tr>

							</table>

							<div class="agree_area">
								<input type="checkbox" name="agree" id="checkAgree" checked>
								<label for="checkAgree" class="checkAgree"><a href="/privacy-policy/" target="_blank">プライバシーポリシー</a>  に同意の上、「入力内容の確認画面へ」を押してください。</label>
							</div>

							<div class="submit_area">
								<span>
									<input id="checkSubmit" type="submit" value="入力内容の確認画面へ" class="pushbtn" />
									<img src="/images/common/arrow_icon.svg" alt="">
								</span>
							</div><!-- submit_area -->


							<input type="hidden" name="mailToNum" value="0" />
							<input type="hidden" name="mode" value="CONFIRM" />
						</form>
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
	<script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
	<script src="/js/jquery.validate.min.js"></script>
	<script>
		// 同意ボタンのチェックがされているか
		const checkbox = document.querySelector('#checkAgree');
		const submitButton = document.querySelector('#checkSubmit');

		let changeDisabled = function() {
			if (checkbox.checked) {
				submitButton.disabled = "";
				submitButton.style.opacity = 1;
				submitButton.parentNode.style.pointerEvents = "auto";
			} else {
				submitButton.disabled = "disabled";
				submitButton.style.opacity = 0.4;
				submitButton.parentNode.style.pointerEvents = "none";
			}
		}
		checkbox.addEventListener("change", changeDisabled);
		window.onload = changeDisabled;
		//


		(function() {
			//標準エラーメッセージの変更
			$.extend($.validator.messages, {
				email_s: '*正しいメールアドレスの形式で入力して下さい',
				required: '*入力必須です',
			});

			//追加ルールの定義
			var methods = {
				email: function(value, element) {
					return this.optional(element) || /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/.test(value);
				},
				tel: function(value, element) {
					return this.optional(element) || /^[0-9]+[0-9.-]+$/.test(value);
				},
			};

			//メソッドの追加
			$.each(methods, function(key) {
				$.validator.addMethod(key, this);
			});

			//入力項目の検証ルール定義
			var rules = {
				name_s: {
					required: true
				},
				
				furigana_s: {
					required: true
				},
				email_s: {
					email: true,
					required: true,
				},
				tel_s: {
					tel: true,
					required: true,
				}
			};

			//入力項目ごとのエラーメッセージ定義
			var messages = {
				name_s: {
					required: "*名前を入力してください"
				},
				email_s: {
					email: "正しいメールアドレスを入力してください"
				},
				check_s: {
					required: "チェックボックスを選択してください"
				},
				tel_s: {
					tel: "正しい電話番号を入力してください"
				}
			};

			$(function() {
				$('#sfm-form').validate({
					errorElement: "span",

					rules: rules,
					messages: messages,

					//エラーメッセージ出力箇所調整
					errorPlacement: function(error, element) {
						if (element.is(':radio')) {
							error.appendTo(element.parent());
						} else if (element.attr("name") == "zip_s") {
							error.insertAfter(".ad_btn");
						} else if (element.attr("name") == "select_s") {
							error.insertAfter(".select-box");
						} else if (element.attr("name") == "check_s[]") {
							error.insertAfter(".checkbox");
						} else {
							error.insertAfter(element);
						}
					},
					focusInvalid: false,
					invalidHandler: function(form, validator) {
						if (!validator.numberOfInvalids())
							return;

						//　エラーのある箇所へのスクロール
						$('html, body').animate({
							scrollTop: $(validator.errorList[0].element).offset().top - 100
						}, 300);
					}

				});
			});

		})();

		$(function() {
			$('.ad_btn').click(function() {
				AjaxZip3.zip2addr('zip', '', 'address', 'address');
			});
			$('input[name="zip"]').keyup(function() {
				if( $(this).val().length === 7 ) { 
					$('.ad_btn').click();
				}
			});
		});
	</script>
</body>

</html>
