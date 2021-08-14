<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Salton</title>
<link rel="shortcut icon" href="/i/favicon-1.ico" type="image/x-icon" />
<link href="/style.css" rel="stylesheet" type="text/css" media="all" />
<!--[if lt IE 7 ]>
<link rel="stylesheet" type="text/css"  href="ie6.css" />
<![endif]-->
<!--[if IE 7 ]>
<link rel="stylesheet" type="text/css"  href="ie7.css" />
<![endif]-->
<link href="/sifr/sIFR-screen.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/js/sifr.js"></script>
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/salton.js"></script>
<script type="text/javascript">
	function show_content_1 () {
    	$('#wrapper, #footer').hide();
	}
	function showContent () {
		
		$('#splashbox').remove();
		$('#wrapper, #footer').show();
		
	} 
	function show_content () {
		
		$('#splashbox').remove();
		$('#wrapper, #footer').show();
		
	} 
	
$(document).ready(function(){	
	
	if ($.browser.msie) { 
		if ($.browser.version < 7) {
		
			//$('img.png').ifixpng();
		}
	}
	
	/*$('#menu a').hover(function(){
		src = $(this).children('img').attr('src');
		src_h = src.substring(0,(src.length - 4)) + '_h.gif';
		$(this).children('img').attr('src', src_h);
	}, function(){
		src = $(this).children('img').attr('src');
		src_h = src.substring(0,(src.length - 6)) + '.gif';
		$(this).children('img').attr('src', src_h);
	
	});*/
	$('.tabber .tabs:first').addClass('active');
	$('.tabs a').click(function(){
		$('.tabs a').show();
		$('.tabs span').remove();
		$('.tabber .active').removeClass('active');
		$(this).hide();
		$(this).parent().addClass('active');
		$(this).parent().prepend('<span>' + $(this).html() + '</span>');
		$('.description').html($('.tabber .active p').html());
		return false;
	
	});
	$('.tabs:eq(0) a').click();
});
</script>
<script src="/js/AC_RunActiveContent.js" type="text/javascript"></script>
<script src="/js/ie_suxx.js" type="text/javascript"></script>
</head>
<body>
<div id="splashbox">
<script type="text/javascript">AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/swflash.cab#version=10,0,0,0','width','1305','height','857','id','splash','align','middle','src','/splash','quality','high','bgcolor','#ffffff','name','splash','allowscriptaccess','sameDomain','allowfullscreen','false','wmode','opaque','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','/splash' );</script>
			<noscript>
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/swflash.cab#version=10,0,0,0" width="1305" height="857" id="splash" align="middle">
				<param name="allowScriptAccess" value="sameDomain" />
				<param name="allowFullScreen" value="false" />
				<param name="movie" value="/splash.swf" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#ffffff" />
				<param name="wmode" value="opaque" />
				<embed src="/splash.swf" quality="high" bgcolor="#ffffff" width="1305" height="857" name="splash" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" wmode="opaque" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
			</object>
			</noscript>
</div>
<div id="wrapper">
	<div class="content"> 
		<div id="left">
         	<div id="logo"><a href="/"><img src="/i/logo.png" alt="Salton" /></a></div>
            
            <?	include($_SERVER['DOCUMENT_ROOT'].'/include/main_menu.php');	?>

         </div>
		 <div id="right" class="index">
			
			
			
	<div id="contest"><a href="/competition/"><img src="/i/contest.png" alt="Конкурс" class="png"/></a></div>
            <?	include($_SERVER['DOCUMENT_ROOT'].'/include/history.php');?>
           <div class="description"></div>
<!--
<div class="index-p">
	<p>Линия средств по&nbsp;уходу за&nbsp;обувью Salton надежно защищает от негативного воздействия внешней среды и&nbsp;обеспечивает ухоженный вид обуви на&nbsp;весь день.</p>
	
	<div class="cap"><span>SALTON. Эффект на весь день!</span></div>
</div>


<div id="flashbox">
			<script type="text/javascript">AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/swflash.cab#version=10,0,0,0','width','800','height','800','id','splash','align','middle','src','/saltonintro','quality','high','bgcolor','#ffffff','name','splash','allowscriptaccess','sameDomain','allowfullscreen','false','wmode','opaque','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','/saltonintro' );</script>
			<noscript>
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/swflash.cab#version=10,0,0,0" width="800" height="800" id="splash" align="middle">
				<param name="allowScriptAccess" value="sameDomain" />
				<param name="allowFullScreen" value="false" />
				<param name="movie" value="/saltonintro.swf" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#ffffff" />
				<param name="wmode" value="opaque" />
				<embed src="/saltonintro.swf" quality="high" bgcolor="#ffffff" width="800" height="800" name="splash" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" wmode="opaque" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
			</object>
			</noscript>
		</div>
		-->
		<!--   <div id="left">
         	<div id="logo"><a href="/"><img src="/i/logo.png" alt="Salton" /></a></div>
            
            <?	//include($_SERVER['DOCUMENT_ROOT'].'/include/main_menu.php');?>

            <div id="production"><img src="/i/production.jpg" alt="" /></div>
         </div>
         <div id="right" class="index">
         	<div id="contest"><a href="/competition/"><img src="/i/contest.png" alt="Конкурс" class="png"/></a></div>
            <?//	include($_SERVER['DOCUMENT_ROOT'].'/include/history.php');?>
           <div class="description"></div>
            
         </div>
      --> 
	</div>
	
</div>
<div id="footer">
	<div class="content">
		<div id="copy">Все права на материалы, находящиеся на сайте, охраняются в соответствии<br />
			с законодательством РФ, в том числе, об авторском праве и смежных правах.<br />
			При любом использовании материалов сайта гиперссылка обязательна. </div>
		<div id="cetis"><a href="http://cetis-media.ru/" target="_blank"><img src="/i/cetis.gif" alt="ЦЭТИС" /></a><a href="http://cetis-media.ru/" target="_blank">Разработка концепции и создание сайта</a><br />
			<a href="http://cetis-media.ru/" target="_blank">Студия веб дизайна ЦЭТИС</a></div>
		<div id="upeco"><img src="/i/upeco.gif" alt="Upeco" /></div>
	</div>
</div>

<!--
<script type="text/javascript">
//<![CDATA['
if(typeof sIFR == "function") {
  sIFR.replaceElement(named({sSelector:".metacaps", sFlashSrc:"/sifr/metacaps.swf", sColor:"#000000", sLinkColor:"#000000", sBgColor:"#FFFFFF", sHoverColor:"#CCCCCC", nPaddingTop:0, nPaddingBottom:0, sWmode:"transparent", sFlashVars:"textalign=left"}));
};
//]]>
</script>-->
</body>
</html>
