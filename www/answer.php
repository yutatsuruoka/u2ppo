<?php
/**
 *
 *u2ppo
 *answer
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

$num = null;

if(!$_POST['q1'] && !$_POST['q2'] && !$_POST['q3'] && !$_POST['q4'] && !$_POST['q5']){
    session_start();
    session_regenerate_id();
    $_SESSION['error'] = 'すべての項目にチェックマークを付けて下さい。';
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: http://u2ppo.com/test.php");
    exit();
} else {
    $num = $_POST['q1'] + $_POST['q2'] + $_POST['q3'] + $_POST['q4'] + $_POST['q5'];
}

if($num <= 4 ){
    $tmp = 'ans1.tmp';
}elseif($num >= 5 && $num <= 9){
    $tmp = 'ans2.tmp';
}elseif($num >= 10){
    $tmp = 'ans3.tmp';
}

$smarty->display($tmp);