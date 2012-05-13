<?php
/**
 *
 *u2ppo
 *comp
 *@tsuru
 *
 */

//smarty
$path = __DIR__ . '/../lib/smarty/';
//ライブラリの読み込み
require_once ($path . 'Smarty.class.php');
//インスタンスを作成
$smarty = new Smarty();
//テンプレートのパス
$smarty->template_dir = __DIR__ . '/../templates/';
//コンパイルのディレクトリ
$smarty->compile_dir  = __DIR__ . '/../var/tmp_c/';

require_once (__DIR__ . '/../lib/func.php');
require_once ( __DIR__ . '/../initialize.php');
require_once ('Mail.php');

//$name = $_POST['name'];
//$mail = $_POST['mail'];

$recipients = 'yuta@tsuruoka.me';

$headers['From']    = 'yurikokai@yurikokai.com';
$headers['To']      = 'yuta@tsuruoka.me';
$headers['Subject'] = 'テストメールを送信しました';

$body = '鶴岡ユウタゆうた';

$mail_object =& Mail::factory('sendmail');
$mail_object->send($recipients, $headers, $body);

$smarty->display('comp.tmp');