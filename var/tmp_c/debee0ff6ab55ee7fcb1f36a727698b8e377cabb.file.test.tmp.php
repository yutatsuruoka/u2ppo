<?php /* Smarty version Smarty-3.1.8, created on 2012-05-15 04:45:53
         compiled from "/home/sites/heteml/users10/h/b/k/hbkr/web/u2ppo.com/www/../templates/test.tmp" */ ?>
<?php /*%%SmartyHeaderCode:14221531454fb101ecd0e5c0-60429210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'debee0ff6ab55ee7fcb1f36a727698b8e377cabb' => 
    array (
      0 => '/home/sites/heteml/users10/h/b/k/hbkr/web/u2ppo.com/www/../templates/test.tmp',
      1 => 1337024413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14221531454fb101ecd0e5c0-60429210',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fb101ecd41a27_02415207',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fb101ecd41a27_02415207')) {function content_4fb101ecd41a27_02415207($_smarty_tpl) {?><!doctype html>
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

<header id="checkHeader" class="mgb100" role="header">
    <div class="innerContents wrapper">
        <h1><img src="i/stresscheck_keyvisual02.png" alt="ストレスチェック"></h1>
    </div>
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
<?php if (($_smarty_tpl->tpl_vars['error']->value)){?>
    <div class="wrapper errorNotification mgb30"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
<?php }?>
<div class="checkBlock wrapper mgb100">
    <form action="/answer.php" method="post">
        <p class="mgb50">過去１ヶ月、あなたがどの様に感じていたかについておたずねします。<br>
            それぞれの質問に対して、そういう気持ちをどれくらいの頻度で感じていたか、<br>
            １番あてはまるものをひとつ選んで下さい。</p>
        <fieldset class="mgb50">
            <label class="color font24">神経過敏に感じましたか？</label>
            <ul class="clearfix">
                <li><input type="radio" name="q1" value="5"><span>いつも</span></ll>
                <li><input type="radio" name="q1" value="4"><span>たいてい</span></ll>
                <li><input type="radio" name="q1" value="3"><span>ときどき</span></ll>
                <li><input type="radio" name="q1" value="2"><span>少しだけ</span></ll>
                <li><input type="radio" name="q1" value="1"><span>全くない</span></ll>
            </ul>
        </fieldset>
        <fieldset class="mgb50">
            <label class="color font24">絶望的だと感じましたか？</label>
            <ul class="clearfix">
                <li><input type="radio" name="q2" value="5"><span>いつも</span></ll>
                <li><input type="radio" name="q2" value="4"><span>たいてい</span></ll>
                <li><input type="radio" name="q2" value="3"><span>ときどき</span></ll>
                <li><input type="radio" name="q2" value="2"><span>少しだけ</span></ll>
                <li><input type="radio" name="q2" value="1"><span>全くない</span></ll>
            </ul>
        </fieldset>
        <fieldset class="mgb50">
            <label class="color font24">そわそわしたり、落ち着きなく感じましたか？</label>
            <ul class="clearfix">
                <li><input type="radio" name="q3" value="5"><span>いつも</span></ll>
                <li><input type="radio" name="q3" value="4"><span>たいてい</span></ll>
                <li><input type="radio" name="q3" value="3"><span>ときどき</span></ll>
                <li><input type="radio" name="q3" value="2"><span>少しだけ</span></ll>
                <li><input type="radio" name="q3" value="1"><span>全くない</span></ll>
            </ul>
        </fieldset>
        <fieldset class="mgb50">
            <label class="color font24">気分が沈み込んで、何が起こっても気が晴れない様に感じましたか？</label>
            <ul class="clearfix">
                <li><input type="radio" name="q4" value="5"><span>いつも</span></ll>
                <li><input type="radio" name="q4" value="4"><span>たいてい</span></ll>
                <li><input type="radio" name="q4" value="3"><span>ときどき</span></ll>
                <li><input type="radio" name="q4" value="2"><span>少しだけ</span></ll>
                <li><input type="radio" name="q4" value="1"><span>全くない</span></ll>
            </ul>
        </fieldset>
        <fieldset class="mgb50">
            <label class="color font24">何をするのも骨折りだと感じましたか？</label>
            <ul class="clearfix">
                <li><input type="radio" name="q5" value="5"><span>いつも</span></ll>
                <li><input type="radio" name="q5" value="4"><span>たいてい</span></ll>
                <li><input type="radio" name="q5" value="3"><span>ときどき</span></ll>
                <li><input type="radio" name="q5" value="2"><span>少しだけ</span></ll>
                <li><input type="radio" name="q5" value="1"><span>全くない</span></ll>
            </ul>
        </fieldset>
        <p class="lineheight150 mgb20">以上で質問は完了です。<br>
            下のボタンを押して、あなたの診断結果を見てみましょう！</p>

        <input class="onMouseOver" type="image" src="i/check_submitbtn.png">
    </form>
</div>



<footer id="checkFooter">
    <div class="innerContents wrapper clearfix">
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
</html>
<?php }} ?>