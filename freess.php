<?php
$url = "https://52ssr.cn";
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, $url);  
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);  
curl_setopt($curl,CURLOPT_USERAGENT,"Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)"); 
$contents = curl_exec($curl);
curl_close($curl);

$tag = "a";
$attr = "class";
$value = "btn btn-info btn-block";
$regex = "/<$tag.*?$attr=\".*?$value.*?\".*?href=\"(.*?)>(.*?)<\/$tag>/is";
preg_match_all($regex,$contents,$matches,PREG_PATTERN_ORDER);

?>

<!doctype html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="https://52ssr.cn/assets/img/apple-icon.png" rel="apple-touch-icon" sizes="76x76" />
	<link href="https://52ssr.cn/assets/img/favicon.png" rel="icon" type="image/png" /><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>资源CAT-免费SSR分享网站</title>	
	<link href="https://52ssr.cn/bootstrap3/css/bootstrap.css" rel="stylesheet" />
	<link href="https://52ssr.cn/assets/css/gsdk.css" rel="stylesheet" />
	<link href="https://52ssr.cn/assets/css/demo.css" rel="stylesheet" /><!--     Font Awesome     -->
	
	
</head>
<body>
<div id="navbar-full">
<div class="container">
<nav class="navbar navbar-ct-blue navbar-transparent navbar-fixed-top" role="navigation">
<div class="container"><!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header"><button class="navbar-toggle" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span></button>
<div class="logo-container">
<div class="logo"><a href="#"><img src="https://52ssr.cn/assets/img/new_logo.png" /> </a></div>

<div class="brand"><a href="#">资源CAT </a></div>
</div>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav navbar-right">
	<li><a href="">主页</a></li>
	<li><a href="">使用教程</a></li>
</ul>
</div>
<!-- /.navbar-collapse --></div>
<!-- /.container-fluid --></nav>
</div>
<!--  end container-->

<div class="blurred-container">
<div class="motto">
<div>Get</div>

<div class="border no-right-border">SS</div>

<div class="border">R</div>

<div>Done</div>
</div>

<div class="img-src" style="background-image: url('https://52ssr.cn/assets/img/cover_4.jpg')"></div>

<div class="img-src blur" style="background-image: url('https://52ssr.cn/assets/img/cover_4_blur.jpg')"></div>
</div>
</div>

<div class="main">
<div class="container tim-container">
<div class="tim-title">
<h2>免费SSR帐号分享</h2>
</div>

<div id="buttons">
<div class="tim-title">
<h3>节点 <small> 选择一个节点，手机直接点击节点自动配置，电脑请右键复制链接地址。 </small></h3>
</div>

<div class="row tim-row" data-class="btn-info" id="display-buttons">
<?php
for ($i=0;$i<7;$i++)
{
	echo '<div class="col-md-3 col-sm-6"><a class="btn btn-info btn-block" href="'.$matches[1][$i].'">'.$matches[2][$i].'</a></div>';
}
?>

<div class="col-md-3 col-sm-6"><a class="btn btn-warning  btn-block" href="#">4月30日更新</a></div>

<div class="col-md-3 col-sm-6"><a class="btn btn-success btn-fill btn-block" href="http://www.52ssr.cn">请合理使用</a></div>
</div>
<!-- end row --></div>
<!-- end buttons div --></div>

<div class="container tim-container">
<div id="labels-badges">
<div class="row">
<div class="col-md-12">
<div class="tim-title">
<h3>友情链接</h3>
<br />
<span class="label label-danger"><a href="">关注资源CAT</a></span> 

&nbsp;</div>
</div>

<div class="col-md-6"></div>
</div>
<!-- end row --></div>
<!-- end labels-badges --></div>
</div>
<!-- end main -->

<div class="parallax-pro">
<div class="img-src" style="background-image: url('http://get-shit-done-pro.herokuapp.com/assets/img/bg6.jpg');"></div>

<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h1><small>喜欢本网站的朋友可以点波收藏，本站每日更新<a> </a></small><a> </a></h1>
<a> </a></div>
<a> </a>

<div class="col-md-6 col-md-offset-3 col-md-12 text-center"><a> </a>

<h1 class="hello text-center"><a> </a><a href="#">一键开启你的世界<span class="label label-warning"> SSR</span></a> <small> </small></h1>

<ul class="list-unstyled">
	<li><small>节点每日更新</small></li>
	<li><small>完全免费节点</small></li>
	<li><small>不再苦苦找寻</small></li>
	<li><small>JUST FOR FUN</small></li>
</ul>
<small> </small>

</div>
</div>

<div class="space-30"></div>

<div class="row">
<div class="col-md-12 text-center">
<div class="credits">&copy; Creat by <a href="http://www.52ssr.cn/" target="_blank" title="我爱酸酸乳">资源CAT</a></div>
</div>
</div>
</div>
</div>
</body>
</html>
