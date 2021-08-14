<?

global $og_title, $og_description, $og_image;

if (!$og_title) {
	$og_title = 'SALTON. Эффект на весь день!';
}
if (!$og_description) {
	$og_description = 'Средства по уходу за обувью SALTON с Технологией All-Day-Effect сохраняют ухоженный вид обуви в течение всего дня, позволяя чувствовать себя уверенно и комфортно в любой ситуации.';
}
if (!$og_image) {
	$og_image = '/i/share-logo.jpg';
}
//include $_SERVER['DOCUMENT_ROOT']."/cnstats/cnt.php";

?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />

<meta property="og:title" content="<?=$og_title?>" />
<meta property="og:description" content="<?=$og_description?> www.салтон.рф" />
<meta property="og:image" content="<?='http://' . $_SERVER['HTTP_HOST'] . $og_image?>" />
<? if (!$meta_title) $meta_title = 'Salton';?>
<title><?=$meta_title?></title>

<link rel="shortcut icon" href="/i/favicon-1.ico" type="image/x-icon" />
<link href="/style.css?<?=time()?>" rel="stylesheet" type="text/css" media="all" />
<link href="/print.css" rel="stylesheet" type="text/css" media="print" />
<!--[if lt IE 7 ]>
<link rel="stylesheet" type="text/css"  href="/ie6.css" />
<![endif]-->
<!--[if IE 7 ]>
<link rel="stylesheet" type="text/css"  href="/ie7.css" />
<![endif]-->
<link href="/sifr/sIFR-screen.css" rel="stylesheet" type="text/css" media="all" />


<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/effects.core.js"></script>
<script type="text/javascript" src="/js/effects.scale.js"></script>
<script type="text/javascript" src="/js/salton.js?<?=time()?>"></script>
<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
</head>
<body>
<div id="wrapper">
	<div id="bg-bot"></div>
	<div id="bg-top"></div>
	<div class="content">
         <div id="left">
         	<div id="logo"><a href="/"><img src="/i/logo.png" alt="Salton" /></a></div>
            
            <?	include($_SERVER['DOCUMENT_ROOT'].'/include/product_menu.php');	?>
            <div id="konkurs"><a href="/product/"><img src="/i/buttons/menu_return.png" alt="Возврат в главное меню" /></a></div>
			
			<div id="assorti"><img src="/i/product/assorti-1.png" width="246" height="235" alt="Ассорти продуктов" /></div>
         </div>
         <div id="right">
		 	<div class="features">
				<ul class="feat">
					<li class="font"><a href="#">Размер текста</a></li>
					<li class="print"><a href="#">Версия для печати</a></li>
				</ul>
				<?	//
				
				include($_SERVER['DOCUMENT_ROOT'].'/include/yandex-search.php');	?>
				
				<div id="ya-share"></div>
				
			<div id="upeco"><a href="http://upeco.ru/" rel="blank"><img src="/i/upeco.png" alt="Upeco" width="119" height="34" /></a></div>
			</div>