<?  session_start();	
global $og_title, $og_description, $og_image;

if (!$og_title) {
	$og_title = 'SALTON. Эффект на весь день!';
}
if (!$og_description) {
	$og_description = 'Средства по уходу за обувью SALTON с Технологией All-Day-Effect сохраняют ухоженный вид обуви в течение всего дня, позволяя чувствовать себя уверенно и комфортно в любой ситуации. www.салтон.рф';
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
<meta property="og:description" content="<?=$og_description?> www.." />
<meta property="og:image" content="<?='http://' . $_SERVER['HTTP_HOST'] . $og_image?>" />
<title>Salton</title>
<link rel="shortcut icon" href="/i/favicon-1.ico" type="image/x-icon" />
<link href="/style.css?vfsd" rel="stylesheet" type="text/css" media="all" />
<!--[if lt IE 7 ]>
<link rel="stylesheet" type="text/css"  href="ie6.css" />
<![endif]-->
<!--[if IE 7 ]>
<link rel="stylesheet" type="text/css"  href="ie7.css" />
<![endif]-->
<link href="/sifr/sIFR-screen.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/jquery.accordion.js"></script>
<script type="text/javascript" src="/js/facebox.js"></script>
<script type="text/javascript" src="/js/salton.js"></script>
<script type="text/javascript" src="/js/app.js"></script>
<script type="text/javascript">

	function showContent () {
	
		/*$('#splashbox').remove();
		$('#wrapper, #footer').show();
		$('#menu a').hover(function(){
			src = $(this).children('img').attr('src');
			src_h = src.substring(0,(src.length - 4)) + '_h.gif';
			$(this).children('img').attr('src', src_h);
		}, function(){
			src = $(this).children('img').attr('src');
			src_h = src.substring(0,(src.length - 6)) + '.gif';
			$(this).children('img').attr('src', src_h);
	
		});*/
	} 
	
$(document).ready(function(){	
	
	
});
</script>
<script src="/js/AC_RunActiveContent.js" type="text/javascript"></script>
<script src="/js/ie_suxx.js" type="text/javascript"></script>
</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-99138589-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter44639305 = new Ya.Metrika({
                    id:44639305,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    ecommerce:"dataLayer"
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/44639305" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<div id="wrapper">
	<div id="bg-bot"></div>
	<div id="bg-top"></div>
	<div class="content"> 
		<div id="left">
         	<div id="logo"><a href="/"><img src="/i/logo.png" alt="Salton" /></a></div>
            
            <?	include($_SERVER['DOCUMENT_ROOT'].'/include/main_menu.php');	?>
			<div id="assorti"><img src="/i/product/assorti-1.png" width="215" height="209" alt="Ассорти продуктов" /></div>
         </div>
		 <div id="right" class="proindex">
			<div class="features">
				<ul class="feat">
					<li class="font"><a href="#">Размер текста</a></li>
					<li class="print"><a href="#">Версия для печати</a></li>
				</ul>
				<?	//
				
				include($_SERVER['DOCUMENT_ROOT'].'/include/yandex-search.php');	?>
				
				<div id="ya-share"><script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
	<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="none" data-yashareQuickServices="vkontakte,facebook,odnoklassniki"></div> 
	</div>
				
				<div id="upeco"><a href="http://upeco.ru/" rel="blank"><img src="/i/upeco.png" alt="Upeco" width="119" height="34" /></a></div>
			</div>

            <div class="salton-promo">
				<a href="http://salton-promo2019.ru/" target="_blank" rel="noopener"><img src="/i/promo-salton.jpg" alt=""></a>
			</div>

<? /*
			<script src="/js/flash_detect_min.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function(){

			       		$('#flashbox').empty().addClass('noflash');

				});
			</script>
			
		<div class="salton">

  <div class="salton-bg" style=""></div>
  <div class="salton-el-1">
    <div class="xx"></div>
  </div>
  <div class="salton-el-2">
    <div class="yy"></div>

</div>

		</div>
		*/ ?>

</div>
<div id="footer">
	<div class="content">
	<div id="copy">Все права на материалы, находящиеся на сайте, охраняются в соответствии<br>
			с законодательством РФ, в том числе, об авторском праве и смежных правах.<br>
			При любом использовании материалов сайта гиперссылка обязательна. </div>
		<div id="cetis"><a href="http://cetis-media.ru/" target="_blank"><img src="/i/cetis.gif" alt="" /></a><a href="http://cetis-media.ru/" target="_blank">Разработка концепции и создание сайта</a><br />
			<a href="http://cetis-media.ru/" target="_blank">Студия веб дизайна ЦЭТИС</a></div>
		
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
</div>
</body>
</html>
