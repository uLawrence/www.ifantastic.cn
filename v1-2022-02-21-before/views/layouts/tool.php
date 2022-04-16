<?php

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= Html::encode($this->title) ?></title>
    <!-- <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <?php $this->head() ?>
</head>
<?php $this->beginBody() ?>
<body>
<nav class="navbar navbar-inverse navbar-expand-sm bg-dark navbar-dark">
	<div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">iFantastic</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
	    <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
	        <ul class="nav navbar-nav">
	            <li class="dropdown">
	                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">热门工具 <span class="caret"></span></a>
	                <ul class="dropdown-menu">
	                    <li><a href="/tool/json">JSON格式化</a></li>
	                    <li><a href="/tool/base64">Base64编码</a></li>
	                    <li><a href="/tool/random">随机数/密码生成</a></li>
	                    <li class="divider" role="separator"></li>
	                    <li><a href="/tool/ip">IP查询</a></li>
	                    <li><a href="/tool/ip">网速测试</a></li>
	                    <li><a href="/tool/ip">颜色助手</a></li>
	                    <li><a href="/tool/ip">机器人</a></li>
	                    <li><a href="/tool/ip">便签</a></li>
	                    <li><a href="/tool/ip">密码管理</a></li>
	                    <li><a href="/tool/ip">时钟/秒表</a></li>
	                    <li><a href="/tool/ip">体重/身高肥胖计算器</a></li>
	                </ul>
	            </li>
	            <li class="dropdown">
	                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">编码/转换 <span class="caret"></span></a>
	                <ul class="dropdown-menu">
	                    <li><a href="/tool/base64">Base64编码</a></li>
	                    <li><a href="/tool/urlencode">Url编码/解码</a></li>
	                    <li><a href="/tool/json2xml">XML/JSON互转</a></li>
	                    <li class="divider" role="separator"></li>
	                    <li><a href="/tool/timestamp">Unix时间戳转换</a></li>
	                </ul>
	            </li>
	            <li class="dropdown">
	                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">加密 <span class="caret"></span></a>
	                <ul class="dropdown-menu">
	                    <li><a href="/tool/hash">MD5/Hash/SHA1</a></li>
	                    <li><a href="/tool/hmac">HMAC计算</a></li>
	                </ul>
	            </li>
	            <li class="dropdown">
	                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" id="audioDropdown" aria-haspopup="true" aria-expanded="false">语音/视频 <span class="caret"></span></a>
	                <ul class="dropdown-menu" aria-labelledby="audioDropdown">
	                    <li><a href="#">电视直播</a></li>
	                    <li><a href="#">广播电台</a></li>
	                    <li><a href="#">网络电视</a></li>
	                    <li><a href="#">聚合直播</a></li>
	                </ul>
	            </li>
	            <li class="dropdown">
	                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" id="mapDropdown" aria-haspopup="true" aria-expanded="false">地图/定位 <span class="caret"></span></a>
	                <ul class="dropdown-menu" aria-labelledby="mapDropdown">
	                    <li><a href="#">地图</a></li>
	                    <li><a href="#">定位</a></li>
	                    <li><a href="#">3D模型</a></li>
	                    <li><a href="#">室内地图</a></li>
	                </ul>
	            </li>
	            <li class="dropdown">
	                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" id="qrCodeDropdown" aria-haspopup="true" aria-expanded="false">二维码 <span class="caret"></span></a>
	                <ul class="dropdown-menu" aria-labelledby="qrCodeDropdown">
	                    <li><a href="#">Link 1</a></li>
	                    <li><a href="#">Link 2</a></li>
	                    <li><a href="#">Link 3</a></li>
	                </ul>
	            </li>
	            <li class="dropdown">
	                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" id="docDropdown" aria-haspopup="true" aria-expanded="false">手册/文档 <span class="caret"></span></a>
	                <ul class="dropdown-menu" aria-labelledby="docDropdown">
	                    <li><a href="#">PHP手册</a></li>
	                    <li><a href="#">MySQL手册</a></li>
	                    <li><a href="#">Linux手册</a></li>
	                    <li><a href="#">Redis手册</a></li>
	                    <li><a href="#">Apache手册</a></li>
	                    <li><a href="#">MongoDb手册</a></li>
	                    <li><a href="#">HTML5手册</a></li>
	                    <li><a href="#">CSS3手册</a></li>
	                    <li role="separator" class="divider"></li>
	                    <li><a href="#">HTTP状态码</a></li>
	                    <li><a href="#">ASCII码</a></li>
	                </ul>
	            </li>
	        </ul>
			<form class="navbar-form navbar-left">
				<div class="form-group"><input type="text" class="form-control" placeholder="Search"></div>
				<button class="btn btn-default" type="button">Submit</button>
			</form>
	    </div>
    </div>
</nav>

<div class="container-fluid">
	<?= $content ?>
</div>

<footer class="container-fluid bg-secondary">
	<div class="container"><p class="text-center text-white">iFantastic实验室 ifantastic.cn &copy;<?= date('Y') ?> 京ICP备xxx号</p></div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
