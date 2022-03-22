<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/common.php");

// $val = $_COOKIE["switchScreen"];

/*=====================================================

	サイト情報

=====================================================*/

//サイトURL統一
if ($_SERVER['HTTPS'] == "on") {
	$PROTOCOL = "https://";
} else {
	$PROTOCOL = "http://";
}
define("CANONICAL", $PROTOCOL . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);


//サイト名
define("SITE_NAME", "つぼい工業株式会社");

//キーワード
define("KEY_WORD", "つぼい工業,空調,衛生,冷熱,静岡,浜松,メンテナンス");

//ディスクリプション
define("DESCRIPTION", "静岡県浜松市で、空調・衛生・冷熱設備の設置・点検・修理・メンテナンスならつぼい工業株式会社");

//H1文言
define("SEO_WORDS", "");
