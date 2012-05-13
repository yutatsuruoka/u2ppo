<?php
require_once (__DIR__ . '/src/facebook.php');
$facebook = new Facebook(array('appId' => '315969015132105',
                              'secret' => 'f3388c5c680c348ed81e17d9395d0d8b',
                              'cookie' => true,
                        ));

//ログイン状態を取得
$fb_user = $facebook->getUser();
 
if ($fb_user)
{
    //ユーザープロファイルを取得
    try {
        $fb_user_profile = $facebook->api('/me');
    }
    catch (FacebookApiException $e)
    {
        //プロファイル取得に失敗
        error_log($e);
        $fb_user = null;
    }
}
 
//ログインURLとログアウトURLを取得
/*
if ($fb_user)
{
    //ログアウトURL取得
    $fb_logout_url = $facebook->getLogoutUrl();
 
}
else
{
*/
    //ログインURL取得
    $par = array('scope' => 'email');
    $fb_login_url = $facebook->getLoginUrl($par);
/* } */
