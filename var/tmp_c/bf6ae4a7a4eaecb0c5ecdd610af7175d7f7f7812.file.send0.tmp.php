<?php /* Smarty version Smarty-3.1.8, created on 2012-05-14 21:30:52
         compiled from "/home/sites/heteml/users10/h/b/k/hbkr/web/u2ppo.com/www/../templates/send0.tmp" */ ?>
<?php /*%%SmartyHeaderCode:12250573944fb0d8cc369e09-02866566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf6ae4a7a4eaecb0c5ecdd610af7175d7f7f7812' => 
    array (
      0 => '/home/sites/heteml/users10/h/b/k/hbkr/web/u2ppo.com/www/../templates/send0.tmp',
      1 => 1336998429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12250573944fb0d8cc369e09-02866566',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fb0d8cc396438_11877460',
  'variables' => 
  array (
    'name' => 0,
    'mail' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fb0d8cc396438_11877460')) {function content_4fb0d8cc396438_11877460($_smarty_tpl) {?><!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="jp"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="jp"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="jp"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="jp" xmlns:fb="http://ogp.me/ns/fb#"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>うつ通知サービス“うつっぽ”</title>
    <meta name="description" content="うつ通知サービス“うつっぽ”もしかしたら、自分の思いちがいかも。でも、１通のメールで、あの人をまもれるかもしれない。">
    <meta name="keywords" content="liverty">
    <meta name="viewport" content="width=device-width">
    <meta property="og:title" content="うつ通知サービス“うつっぽ”もしかしたら、自分の思いちがいかも。でも、１通のメールで、あの人をまもれるかもしれない。">
    <meta property="og:site_name" content="liverty | Live in liberty." />
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:image" content="">
    <meta property="og:image" content="">
    <meta property="og:image" content="">
    <meta property="og:type" content="website" />
    <meta property="fb:app_id" content="150394821758169" />
    <link rel="stylesheet" href="c/style.css">
    <script src="j/modernizr-2.5.3.min.js"></script>
</head>

<body id="top">
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=150394821758169";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<header id="globalHeader" class="wrapper" role="header">
    <hgroup>
        <h1><img src="i/logo.png" alt="U2plus"></h1>
        <h2><img src="i/caption.png" alt="うつ通知サービス“うつっぽ”もしかしたら、自分の思いちがいかも。でも、１通のメールで、あの人をまもれるかもしれない。"></h2>
    </hgroup>
    <!--
<div class="headerContents ">
  <aside class="snsContainer clearfix">
  <div class="snsButton pull-right">
    <fb:like href="https://www.facebook.com/liverty.jp" send="false" layout="button_count" width="100" show_faces="false" font="verdana" data-content="組織も、働き方も、生き方も、２１世紀型にアップデートしようぜ！ - liverty | Live in liberty. 自由に生きろ"></fb:like>
  </div>
  <div class="snsButton pull-right">
    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://liverty.jp/" data-text="" data-hashtags="liverty">Tweet</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div>
  </aside>
</div>
  -->
</header>

<div class="formContainer mgb100">
    <div class="innerContents wrapper clearfix">
        <p class="pushText font24 mgb30">入力内容は合っていますか？<br>
            間違いが無ければ、うつっぽを使って相手にお知らせを送りましょう。<br>
            あなたはとても優しい人ですね！</p>
        <form>
            <dl>
                <dt><label for=""><img src="i/label_name.png" alt="あいての名前"></label></dt>
                <dd><input type="text"></dd>
            </dl>
            <dl>
                <dt><label for=""><img src="i/label_email.png" alt="あいてのメールアドレス"></label></dt>
                <dd><input type="email"></dd>
            </dl>
            <dl class="relation">
                <dt><label for=""><img src="i/label_relation.png" alt="あいてとのかんけい"></label></dt>
                <dd><input type="text"></dd>
            </dl>
            <input class="submitBtn onMouseOver" type="image" src="i/btn_submit.png">
        </form>
    </div>
</div>



<form name="form" action="/comp.php" method="post">
    ユーザー名：<br />
<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

    <br /><br />
    メールアドレス：<br />
<?php echo $_smarty_tpl->tpl_vars['mail']->value;?>

    関係：<br />
<?php echo $_smarty_tpl->tpl_vars['type']->value;?>

    <br /><br />
    <input type="hidden" name="name" value=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
>
    <input type="hidden" name="mail" value=<?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
>
    <input type="hidden" name="type" value=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
>
    <input type="submit" value="申告する。"><br />
</form>




<div class="mailSample wrapper">
    <h1 class="font24 color mgb20">メール画面サンプル</h1>
    <p class="mgb20">うつっぽのメールは完全匿名にて送信されますので、相手にあなたの名前が知れる事はありません。<br>
        あなたの大切な人を、こっそりとサポートしてあげる事ができます。</p>
    <img src="i/mail_sample.png" alt="メール画面サンプル">
</div>



<footer class="wrapper">
    <div class="innerContents clearfix">
        <ul class="pull-left clearfix">
            <li><a href="" target="_blank">運営会社</a><span>|</span></li>
            <li><a href="" target="_blank">お問い合わせ</a><span>|</span></li>
            <li><a href="" target="_blank">ブログ</a></li>
        </ul>
        <p class="pull-right"><small>Copyright &copy; U2plus All rights reserved.</small></p>
    </div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="j/jquery-1.7.1.min.js"><\/script>')</script>
<script src="j/script.js"></script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-23653112-14']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
</body>
</html>
<?php }} ?>