<?php
$f='dog.txt';   //文件名
$a=file($f);  //把文件的所有内容获取到数组里面
$n=count($a); //获得总行数
$rnd=rand(0,$n);    //产生随机行号
$rnd_line=$a[$rnd]; //获得随机行
$tit = date('m 月 d 日')." - 花海";
?>

<!DOCTYPE html>

<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>舔狗日记 - 今天你又行了</title>
	<meta name="description" content="我们精心熬制了有史以来最毒1000多条舔狗日记,句句“治愈”人心! 只为了帮你更好的看清人生认识自己，直面现实,直面惨淡的人生,不给你励志,不给你慰藉,像一根鞭猛的抽你一下,使你清醒,知道这个世界和你自己最真实的一面,是青少年手机里的必备宝典。">
	<meta name="keywords" content="鸡汤,社会经典语录,馊鸡汤,舔狗日记">
	<meta http-equiv="Cache-Control" content="no-siteapp">
	<meta name="author" content="me@majs.top" />
	<meta property="og:title" content="舔狗日记 - 今天你又行了" />
	<meta property="og:url" content="https://sb.majs.top/" />
	<meta property="og:site_name" content="舔狗日记 - 今天你又行了" />
	<meta property="og:description" content="我们精心熬制了有史以来最毒1000多条舔狗日记,句句“治愈”人心! 只为了帮你更好的看清人生认识自己，直面现实,直面惨淡的人生,不给你励志,不给你慰藉,像一根鞭猛的抽你一下,使你清醒,知道这个世界和你自己最真实的一面,是青少年手机里的必备宝典。"/>
	<link href="./img/min.css" rel="stylesheet">
		  	<link rel="shortcut icon" href="/icon.jpg">
</head>

<body>
<div class="top-wrap" style="position: absolute; top: 1vh;width: 100%;z-index: 999"> 
<div class="container">
	<div class="row" style="margin-top: 30px;">
	    <div class="col">
	      <img src="./img/logo_dog.png">
	    </div>
	    <div class="col">
	    	<div class="float-right" style="padding-top: 0px;">
	    	   <a class="btn btn-primary btn-filled btn-xs" href="/" >PC端</a>
	    		<a class="btn btn-primary btn-filled btn-xs" href="https://majs.top/" >博客</a>
	    	</div>
	    </div>
		</div>
</div>
</div>
<div class="main-wrapper" style="position: relative; top: -6vh;">
<div class="container main-sentence justify-content-center text-center">
        <div class="wrapper">				
		<span id="text" style="font-size: 1rem;"><?=$rnd_line;?></span>
        <textarea id="input">花海</textarea>
        </div><br>
        <button class="btn btn-primary" onclick="copyText()">点我复制</button>
</div>
</div>
<div class="foot-1" style="position: absolute; bottom: 7vh;width: 100%;">
	<div class="container">
		<div class="row">
			<div class="col text-center">
	            <span class="btn btn-primary btn-filled btn-xs"><a class="btn btn-primary btn-filled btn-xs" href="./" >再来一条</a></span>
	    </div>
  		</div>
  		</div>
 <footer>
 <p class="text-center">© 2020 花海 All rights reserved. | 投稿/收录联系邮箱：me@majs.top | <a href="/v1" target="_blank">API接口</a> </p>
</footer>
</div>
<style type="text/css">
  .wrapper {position: relative;}
  #input {position: absolute;top: 0;left: 0;opacity: 0;z-index: -10;}
</style>
<script type="text/javascript">
  function copyText() {
   var text = document.getElementById("text").innerText;
   var input = document.getElementById("input");
   input.value = text; // 修改文本框的内容
   input.select(); // 选中文本
   document.execCommand("copy"); // 执行浏览器复制命令
   alert("复制成功");
  }
 </script>
<!-- 字体文件 -->
	<style>
  @font-face{
	font-family: FZMWFont;
	src: url('//cdn.jsdelivr.net/gh/blueskself/iBaiYun@master/FZMWFont.ttf');
	format('ttf');
}

*
{
	font-family:FZMWFont;
}
i{
	font-family:none;
}
@media only screen and (min-width: 0px) and (max-width: 767px){
    .index-banner{
		height: 50vh!important;
	}

}
</style>
</body>

</html>