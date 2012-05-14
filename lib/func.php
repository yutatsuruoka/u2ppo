<?php
/**
 *
 *oremaison
 *定義関数
 *@tsuru
 *
 */

/**
 * getDB
 * 
 * @return db接続オブジェクト
 */
function getDB(){
	$dsn = 'mysql:dbname=_u2ppo;host=mysql106.heteml.jp';
	$user = '_u2ppo';
	$pass = 'root';
	
	try{
		return (new PDO($dsn, $user, $pass));
	}catch (PDOException $e){
		echo 'db接続エラー';
		/* doRedirect('404.php'); */
    	die();
	}
}