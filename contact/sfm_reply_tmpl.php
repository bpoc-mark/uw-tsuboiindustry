<?php

/*--------------------------------------------------------------------------

	フォームメール - sformmmail2　フォーム入力者向けに送信されるメールです

--------------------------------------------------------------------------*/

// 自動返信のSubject（件名）
$replySubject = '[つぼい工業株式会社] お問合わせを受け付けました';

//送信メッセージ
$replyMessage = <<< EOD
***このメールは自動返信メールです***　

{$sfm_mail->name}様

この度は、つぼい工業株式会社へお問い合わせいただき、ありがとうございました。

内容を確認後、ご入力されたメールアドレス宛にお返事致します。

お問い合わせ内容は、以下の通りです。
内容にお間違いがないかどうか、今一度ご確認をお願いいたします。

────────────────────────────────────

■お名前
{$sfm_mail->name}

■ふりがな
{$sfm_mail->furigana}

■会社名
{$sfm_mail->company}

■会社名ふりがな
{$sfm_mail->companyfurigana}

■部署・役職　
{$sfm_mail->department}

■ご住所
〒{$sfm_mail->zip}
{$sfm_mail->address}

■電話番号
{$sfm_mail->tel}

■メールアドレス
{$sfm_mail->email}

■お問い合わせ内容
{$sfm_mail->message}


==============================================

つぼい工業株式会社

〒433-8105 静岡県浜松市北区三方原町874-5
TEL：053-438-1111（代）
FAX：053-438-1118

==============================================
EOD;
