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
$smarty->left_delimiter = '<%';
$smarty->right_delimiter = '%>';
//テンプレートのパス
$smarty->template_dir = __DIR__ . '/../templates/';
//コンパイルのディレクトリ
$smarty->compile_dir  = __DIR__ . '/../var/tmp_c/';

require_once (__DIR__ . '/../lib/func.php');
require_once ( __DIR__ . '/../initialize.php');
require_once ('Mail.php');

//POSTデータが無ければindexへ
if(!$_POST['name'] && !$_POST['mail'] && !$_POST['type']){
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: http://u2ppo.com");
    exit();
}

$name = htmlspecialchars($_POST['name']);
$mail = htmlspecialchars($_POST['mail']);
$type = htmlspecialchars($_POST['type']);

$recipients = $mail;

$headers['From']    = 'yuta@apple.com';
$headers['To']      = $mail;
$headers['Subject'] = $name . 'さんにテストメールを送信しています。';

$body = 'u2ppoテスト送信。あなたとの関係は' . $type . 'です。';

$mail_object =& Mail::factory('sendmail');
$mail_object->send($recipients, $headers, $body);

//投稿時間登録
session_start();
session_regenerate_id();
$_SESSION['time'] = time();

//DB接続
$dbh = getDB();

//送信情報登録
$sql = "INSERT into posts (name, mail, created) VALUES (?, ?, ?)";
$stmt = $dbh->prepare($sql);

$date = date("Y/m/d H:i:s");

if ($_POST['open'] == 1) {
    $open = 1;
}

$stmt->bindParam(1, $name);
$stmt->bindParam(2, $mail);
$stmt->bindParam(3, $date);

$stmt->execute();
unset ($dbh);


$smarty->assign("name",$name);
$smarty->assign("mail",$mail);
$smarty->assign("type",$type);

$smarty->display('comp.tmp');