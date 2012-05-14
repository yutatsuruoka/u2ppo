<?php
/**
 *
 *u2ppo
 *send
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
$smarty->left_delimiter = '<%';
$smarty->right_delimiter = '%>';
//コンパイルのディレクトリ
$smarty->compile_dir  = __DIR__ . '/../var/tmp_c/';

require_once (__DIR__ . '/../lib/func.php');

//POSTデータが無ければindexへ
if(!$_POST['name'] && !$_POST['mail'] && !$_POST['type']){
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: http://u2ppo.com");
    exit();
}

//連続投稿阻止処理180秒
session_start();
session_regenerate_id();
if($_SESSION['time']){
    $post = time() - $_SESSION['time'];
    if($post <= 10){
        //投稿NGページヘ
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: http://u2ppo.net");
        exit();
    }
}

//メールアドレス正規表現
$email = $_POST['mail'];
if (!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$email)) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: http://u2ppo.com/error.html");
    exit();
}

$name = htmlspecialchars($_POST['name']);
$mail = htmlspecialchars($_POST['mail']);
$type = htmlspecialchars($_POST['type']);

$smarty->assign("name",$name);
$smarty->assign("mail",$mail);
$smarty->assign("type",$type);

$smarty->display('send.tmp');