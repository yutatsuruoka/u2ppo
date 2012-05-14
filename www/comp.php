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

$headers['From']    = 'noreply@u2ppo.com';
$headers['To']      = $mail;
$headers['Subject'] = 'うつ通知サービス“うつっぽ”です。';

$body = $name . 'さんへ、
あなたのお知り合い様より「うつっぽ」（ http://hogehoge.info/ ）にて
メッセージをお預かりしております。最後まで、落ち着いてお読みください。

==============================

やすひろさん
気のせいならいいのですが、友達として、どうしても心配なことがあるんです。
わたしが最近のあなたをみていると、ストレスをため込んでいるように見えます。すこし無理をしていませんか？
思い過ごしならいいのですが、すこしリラックスされるといいのかな、と感じています。

==============================

以上が、依頼主様からのメッセージとなります。

もしも、ストレスチェックをされる場合はこちら
【うつっぽさチェック＆対処法のアドバイス】
http://u2ppo.com/check.php';

$mail_object =& Mail::factory('sendmail');
$mail_object->send($recipients, $headers, $body);

//投稿時間登録
session_start();
session_regenerate_id();
$_SESSION['time'] = time();

//DB接続
$dbh = getDB();

//送信情報登録
$sql = "INSERT into posts (name, mail, type, created) VALUES (?, ?, ?, ?)";
$stmt = $dbh->prepare($sql);

$date = date("Y/m/d H:i:s");

$stmt->bindParam(1, $name);
$stmt->bindParam(2, $mail);
$stmt->bindParam(3, $type);
$stmt->bindParam(4, $date);

$stmt->execute();
unset ($dbh);


$smarty->assign("name",$name);
$smarty->assign("mail",$mail);
$smarty->assign("type",$type);

$smarty->display('comp.tmp');