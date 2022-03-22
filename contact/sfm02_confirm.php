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

    <main id="Contact" class="sfm2">
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
			<div class="container">
			<div class="form_wrap">
				<p class="desc">
				入力内容をご確認の上、「送信する」をクリックしてください。<br><br>
				</p>
				<form method="post" name="sfm-form" id="sfm-form" action="./">
				<table>
									<tr>
										<th>お名前<span class="need">*</span></th>
										<td><p><?php echo $sfm_html->name; ?></p></td>
									</tr>
									
									<tr>
										<th>ふりがな<span class="need">*</span></th>
										<td><p><?php echo $sfm_html->furigana; ?></p></td>
									</tr>
									
									<tr>
										<th>会社名</th>
										<td><p><?php echo $sfm_html->company; ?></p></td>
									</tr>
									
									<tr>
										<th>会社名ふりがな</th>
										<td><p><?php echo $sfm_html->companyfurigana; ?></p></td>
									</tr>
									
									<tr>
										<th>部署・役職</th>
										<td><p><?php echo $sfm_html->department; ?></p></td>
									</tr>

									<tr class="address">
										<th>ご住所</th>
										<td>
						<p><?php echo $sfm_html->zip; ?></p>
						<p><?php echo $sfm_html->address; ?></p>
										</td>
									</tr>

									<tr>
										<th>お電話番号<span class="need">*</span></th>
										<td><p><?php echo $sfm_html->tel; ?></p></td>
									</tr>

									<tr>
										<th>メールアドレス<span class="need">*</span></th>
										<td><p><?php echo $sfm_html->email; ?></p></td>
									</tr>

									<tr>
										<th>お問い合わせ内容</th>
										<td><p><?php echo $sfm_html->message; ?></p></td>
									</tr>

								</table>

				<div class="submit_area">
					<?php echo $sfm_submit; ?>
				</div><!-- submit_area -->

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
</body>

</html>
