<?php
/**
 *
 *u2ppo
 *index
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

$smarty->display('index.tmp');