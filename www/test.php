<?php
/**
 *
 *u2ppo
 *test
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

$error = null;

session_start();
session_regenerate_id();
if($_SESSION['error']){
    $error = $_SESSION['error'];
    session_destroy();
}

$smarty->assign("error",$error);
$smarty->display('test.tmp');