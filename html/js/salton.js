$(document).ready(function(){
						   
		$('a[rel="blank"]').click(function(){
				window.open($(this).attr('href'));
				return false;
		});
	$('.color a:first').addClass('inactive');
	$('.color').each(function(){
		$(this).children('a:first').addClass('inactive');					  
	});
	
	$('a.swap').each(function(){
		$(this).children('img:eq(1)').hide();						  
	});
	
	$('#usertype').change(function(){

		if ($(this).val() == 2)
			$('div.usertype-2').show();
		else
			$('div.usertype-2').hide();
	});

	$('#menu a[href^="http"]').click(function(){
		window.open($(this).attr('href'));
		return false
	});

	$('#menu li:last-child').addClass('last-child');

	if ($.browser.msie) { 
		if ($.browser.version < 7) {
			
		}
		$('.color a').click(function(){
				if ($(this).hasClass('inactive')) {}
				else {
					$(this).parent().children('a').removeClass('inactive');
					//$('.color a').removeClass('inactive');
					color = $(this).attr('class');
					src  =  $('.imgswap img').attr('src');
					src =  src.substring(0,(src.length - 10)) + '_' + color + '.jpg';
					
					$('.imgswap img').fadeOut(500);
					setTimeout ("$('.imgswap img').attr('src', src)", 500);
					$('.imgswap img').fadeIn(500);
				}
				$(this).addClass('inactive');
				return false;
		});
		
		$('a.swap').toggle(function(){
			$('a.swap img:first').fadeOut(500);	
			setTimeout ("$('a.swap img:eq(1)').fadeIn(500)", 500);
							
									
		}, function(){
			$('a.swap img:eq(1)').fadeOut(500);	
			setTimeout ("$('a.swap img:first').fadeIn(500)", 500);
	
		});
	
	
	}
	
	else {
			$('.color a').click(function(){
			if ($(this).hasClass('inactive')) {}
			else {
				$('.color a').removeClass('inactive');
				color = $(this).attr('class');
				src  =  $('.imgswap img').attr('src');
				//alert($('.imgswap img').height());
				$('.imgswap').height($('.imgswap img').height());
				src =  src.substring(0,(src.length - 10)) + '_' + color + '.jpg';
				$('.imgswap img').hide("scale", {}, 500);
				image = new Image();
				image.src = src;
				setTimeout ("$('.imgswap img').attr('src', src)", 500);
				$('.imgswap img').show("scale", {}, 500);
				
			}
			$(this).addClass('inactive');
			return false;
		});
		
		$('a.swap').toggle(function(){
			$('a.swap img:first').hide("scale", {}, 500);	
			setTimeout ("$('a.swap img:eq(1)').show('scale', {}, 500)", 500);
							
									
			}, function(){
				$('a.swap img:eq(1)').hide("scale", {}, 500);	
				setTimeout ("$('a.swap img:first').show('scale', {}, 500)", 500);
		
		});
	}
	
	
	
	/*$('.color a').click(function(){

		if ($(this).hasClass('inactive')) {}
		else {
			$('.color a').removeClass('inactive');
			color = $(this).attr('class');
			src  =  $('.imgswap img').attr('src');
			src =  src.substring(0,(src.length - 10)) + '_' + color + '.jpg';
			$('.imgswap img').hide("scale", {}, 500);
			setTimeout ("$('.imgswap img').attr('src', src)", 500);
			$('.imgswap img').show("scale", {}, 500);
			
		}
		$(this).addClass('inactive');
		return false;
	});*/
	
	
	
	
	$('#menu li > a.f_menu:not(.active)').hover(function(){
		var ll = 4;
		src = $(this).children('img').attr('src');
		
		src_h = src.substring(0,(src.length - ll)) + '_h.gif';
		$(this).children('img').attr('src', src_h);
	}, function(){
		src = $(this).children('img').attr('src');
		src_h = src.substring(0,(src.length - 6)) + '.gif';
		$(this).children('img').attr('src', src_h);
	
	});
	
	if ($('#accordion').attr('id') == 'accordion' ) {
		
		$('#accordion').accordion({
			active: 'li.active',
			header: 'a.acc',
			alwaysOpen: false,
			autoheight: false
		});
	}
	
	$('#accordion a.acc').click(function(){
			$(this).parent().children('.submenu').children('ul').css('background-position','0% ' + 
																
			($(this).parent().children('.submenu').height()-16) + 'px');									  
	});
	
	if ($('a.facebox').hasClass('facebox')) $('a.facebox').facebox();
	
	$('#right ul.feat li.print a').click(function(){

		$.print_link = $('<link href="/print_show.css" rel="stylesheet" type="text/css" media="all" />').insertBefore('head link[media="print"]');

		
		$('.leftcol').append('<a href="'+ window.location +'" onclick="$.print_link.remove(); $(this).remove();" class="back"><img src="/i/buttons/back.png" alt="�����" /></a>');
		
		setTimeout("window.print();", 700);
	
	    return false;
	});
	
	$('#right ul.feat li.font a').click(function(){
		
		$.el = $('#right h2, #right h3, #right p, #right .prodtext li, #right .prodtext p a, #accordion li a');
		
		if ($(this).hasClass('active')) {
			$.el.each(function(){
				//console.log($(this).css('font-size'));
			
				var currentFontSize = $(this).css('font-size');
				var newFontSize = parseFloat(currentFontSize, 10)/1.3;
				$(this).css('font-size', newFontSize);
			});
			$(this).removeClass('active');
		} else {
			$.el.each(function(){
				//console.log($(this).css('font-size'));
			
				var currentFontSize = $(this).css('font-size');
				var newFontSize = parseFloat(currentFontSize, 10)*1.3;
				$(this).css('font-size', newFontSize);
			});
			$(this).addClass('active');
		}
		
		
	    return false;
	});
	
	var pageTitle = $('meta[property="og:title"]').attr('content');
	var shareText = $('meta[property="og:description"]').attr('content');
	/*var pageTitle = 'SALTON. ������ �� ���� ����!';
	
	var shareImg =  'http://13.test0.ru/i/share-logo.jpg';
	
	if ($('#right .prodtext').size() == 1) {

		pageTitle = 'SALTON. ' + $('#right h2').html();
		shareText = $('.prodtext p.med:first').text().split(".");
		shareText = shareText[0] + '.';
		shareImg =  'http://13.test0.ru/' + $('#right .imgswap img:first').attr('src');
	}
	
	$('meta[property="og:title"]').attr('content',pageTitle);
	$('meta[property="og:description"]').attr('content',shareText);
	$('meta[property="og:image"]').attr('content',shareImg);*/
	
	new Ya.share({
		element: 'ya-share',
			elementStyle: {
				'type': 'none',
				'quickServices': ['vkontakte', 'facebook', 'odnoklassniki']
			},
			//link: 'http://www.yandex.com/',
			title: pageTitle,
			//image: shareImg,
			serviceSpecific: {
				vkontakte: {
					title: pageTitle
			   },
				facebook: {
					title: pageTitle
			   },
			   odnoklassniki: {
					title: pageTitle
			   }
			},
			description: shareText
			
	});
	

	
	
});

function strstr (haystack, needle, bool) {
    // http://kevin.vanzonneveld.net
    // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +   bugfixed by: Onno Marsman
    // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // *     example 1: strstr('Kevin van Zonneveld', 'van');
    // *     returns 1: 'van Zonneveld'
    // *     example 2: strstr('Kevin van Zonneveld', 'van', true);
    // *     returns 2: 'Kevin '
    // *     example 3: strstr('name@example.com', '@');
    // *     returns 3: '@example.com'
    // *     example 4: strstr('name@example.com', '@', true);
    // *     returns 4: 'name'
    var pos = 0;

    haystack += '';
    pos = haystack.indexOf(needle);
    if (pos == -1) {
        return false;
    } else {
        if (bool) {
            return haystack.substr(0, pos);
        } else {
            return haystack.slice(pos);
        }
    }
}


