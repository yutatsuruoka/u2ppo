<?php /* Smarty version Smarty-3.1.8, created on 2012-05-15 04:47:00
         compiled from "/home/sites/heteml/users10/h/b/k/hbkr/web/u2ppo.com/www/../templates/send.tmp" */ ?>
<?php /*%%SmartyHeaderCode:10611751724faf3fd6adfb68-11180323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '817d99b0f69a17c8eb0a227eca04be576abde414' => 
    array (
      0 => '/home/sites/heteml/users10/h/b/k/hbkr/web/u2ppo.com/www/../templates/send.tmp',
      1 => 1337024775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10611751724faf3fd6adfb68-11180323',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4faf3fd6b0f4e9_30449674',
  'variables' => 
  array (
    'name' => 0,
    'mail' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4faf3fd6b0f4e9_30449674')) {function content_4faf3fd6b0f4e9_30449674($_smarty_tpl) {?><!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="jp"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="jp"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="jp"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="jp" xmlns:fb="http://ogp.me/ns/fb#"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>うつ通知サービス“うつっぽ”</title>
    <meta name="description" content="うつ通知サービス“うつっぽ”もしかしたら、自分の思いちがいかも。でも、１通のメールで、あの人をまもれるかもしれない。">
    <meta name="keywords" content="u2ppo">
    <meta name="viewport" content="width=device-width">
    <meta property="og:title" content="うつ通知サービス“うつっぽ”もしかしたら、自分の思いちがいかも。でも、１通のメールで、あの人をまもれるかもしれない。">
    <meta property="og:site_name" content="うつ通知サービス | うつっぽ" />
    <meta property="og:description" content="もしかしたら、自分の思いちがいかも。でも、１通のメールで、あの人をまもれるかもしれない。うつ通知サービス“うつっぽ">
    <meta property="og:url" content="http://u2ppo.com/">
    <meta property="og:image" content="http://u2ppo.com/i/ogimage.png">
    <meta property="og:type" content="website" />
    <meta property="fb:app_id" content="364897396902078" />
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
        <h1><a href="/"><img src="i/logo.png" alt="U2plus"></a></h1>
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
            間違いが無ければ、うつっぽを使って相手にお知らせを送りましょう。</p>
        <form name="form" action="/comp.php" method="post">
        	<div class="dammyContainer clearfix">
            <dl class="dammy">
                <dt><label for=""><img src="i/label_name.png" alt="あいての名前"></label></dt>
                <dd class="input"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</dd>
            </dl>
            <dl class="dammy">
                <dt><label for=""><img src="i/label_email.png" alt="あいてのメールアドレス"></label></dt>
                <dd class="input"><?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
</dd>
            </dl>
            <dl class="dammy">
                <dt><label for=""><img src="i/label_relation.png" alt="あいてとのかんけい"></label></dt>
                <dd class="type"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</dd>
            </dl>
            </div>
		    <input type="hidden" name="name" value=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
>
		    <input type="hidden" name="mail" value=<?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
>
		    <input type="hidden" name="type" value=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
>
            <input class="submitBtn finishBtn onMouseOver" type="image" src="i/btn_submit.png">
        </form>
    </div>
</div>


<div class="mailSample wrapper">
    <h1 class="font24 color mgb20">メール画面サンプル</h1>
    <p class="mgb20">うつっぽのメールは完全匿名にて送信されますので、相手にあなたの名前が知れる事はありません。<br>
        あなたの大切な人を、こっそりとサポートしてあげる事ができます。</p>
    <img src="i/mail_sample.png" alt="メール画面サンプル">
</div>


<footer class="wrapper">
    <div class="innerContents clearfix">
        <ul class="pull-left clearfix">
            <li><a href="http://u2plus.co.jp/" target="_blank">運営会社</a><span>|</span></li>
            <li><a href="http://u2plus.jp/contact" target="_blank">お問い合わせ</a><span>|</span></li>
            <li><a href="http://blog.u2plus.jp/" target="_blank">ブログ</a></li>
        </ul>
        <p class="pull-right"><small>Copyright &copy; <a href="http://liverty.jp" target="_blank">liverty</a> × <a href="http://u2plus.co.jp/" target="_blank">U2plus</a> All rights reserved.</small></p>
    </div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="j/jquery-1.7.1.min.js"><\/script>')</script>
<script src="j/script.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23653112-15']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html><?php }} ?>