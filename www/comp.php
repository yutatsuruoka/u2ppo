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

$name = $_POST['name'];
$mail = $_POST['mail'];

$recipients = $mail;

$headers['From']    = 'yuta@apple.com';
$headers['To']      = $mail;
$headers['Subject'] = $name . 'さんにテストメールを送信しています。';

$body = 'u2ppoテスト送信';

$mail_object =& Mail::factory('sendmail');
$mail_object->send($recipients, $headers, $body);

$smarty->assign("name",$name);
$smarty->assign("mail",$mail);

$smarty->display('comp.tmp');