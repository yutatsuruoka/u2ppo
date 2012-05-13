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
	$dsn = 'mysql:dbname=_oremaison;host=mysql107.heteml.jp';
	$user = '_oremaison';
	$pass = 'root';
	
	try{
		return (new PDO($dsn, $user, $pass));
	}catch (PDOException $e){
		echo 'db接続エラー';
		/* doRedirect('404.php'); */
    	die();
	}
}