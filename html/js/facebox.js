/* face box */
(function($) {
  $.facebox = function(data, klass) {
    $.facebox.init()
    $.facebox.loading()
    $.isFunction(data) ? data.call($) : $.facebox.reveal(data, klass)
  }
//page size 
		/**
		 / THIRD FUNCTION
		 * getPageSize() by quirksmode.com
		 *
		 * @return Array Return an array with page width, height and window width, height
		 */
		function ___getPageSize() {
			var xScroll, yScroll;
			if (window.innerHeight && window.scrollMaxY) {	
				xScroll = window.innerWidth + window.scrollMaxX;
				yScroll = window.innerHeight + window.scrollMaxY;
			} else if (document.body.scrollHeight > document.body.offsetHeight){ // all but Explorer Mac
				xScroll = document.body.scrollWidth;
				yScroll = document.body.scrollHeight;
			} else { // Explorer Mac...would also work in Explorer 6 Strict, Mozilla and Safari
				xScroll = document.body.offsetWidth;
				yScroll = document.body.offsetHeight;
			}
			var windowWidth, windowHeight;
			if (self.innerHeight) {	// all except Explorer
				if(document.documentElement.clientWidth){
					windowWidth = document.documentElement.clientWidth; 
				} else {
					windowWidth = self.innerWidth;
				}
				windowHeight = self.innerHeight;
			} else if (document.documentElement && document.documentElement.clientHeight) { // Explorer 6 Strict Mode
				windowWidth = document.documentElement.clientWidth;
				windowHeight = document.documentElement.clientHeight;
			} else if (document.body) { // other Explorers
				windowWidth = document.body.clientWidth;
				windowHeight = document.body.clientHeight;
			}	
			// for small pages with total height less then height of the viewport
			if(yScroll < windowHeight){
				pageHeight = windowHeight;
			} else { 
				pageHeight = yScroll;
			}
			// for small pages with total width less then width of the viewport
			if(xScroll < windowWidth){	
				pageWidth = xScroll;		
			} else {
				pageWidth = windowWidth;
			}
			arrayPageSize = new Array(pageWidth,pageHeight,windowWidth,windowHeight) 
			return arrayPageSize;
		};
//

//
  $.facebox.settings = {
    loading_image : '/i/popup/loader.gif',
    close_image   : '/i/popup_close.gif',
    image_types   : [ 'png', 'jpg', 'jpeg', 'gif' ],
    facebox_html  : '\
 <div id="jquery-overlay" style="display:none;"></div> \
  <div id="facebox" style="display:none;"> \
    <div class="popup"> \
       <div class="body"> \
			<div class="popup_content"> \
				<a href="#" class="close"><img src="/i/popup/popup_close.gif" alt="Close" /></a> \
				<div class="p_tl"></div><div class="p_tr"></div> \
					<div class="border_wrap"><div class="popup_data"> \
					</div></div> \
				<div class="p_bl"></div><div class="p_br"></div> \
			</div> \
       </div> \
    </div> \
  </div>'
  }
  $.facebox.loading = function() {
			//
    if ($('#facebox .loading').length == 1) return true
  			var arrPageSizes = ___getPageSize();
			// Style overlay and show it
			$('#jquery-overlay').css({
				backgroundColor:	'#000',
				opacity:			0.5,
				width:				'100%',
				height:				arrPageSizes[1]
			}).fadeIn();
    $('#facebox .popup_data').empty()
	$('#facebox .border_wrap').height('auto');
    $('#facebox .body').children().hide().end().
      append('<div class="loading"><img src="'+$.facebox.settings.loading_image+'"/></div>')


    var pageScroll = $.facebox.getPageScroll()
    $('#facebox').show()

    $(document).bind('keydown.facebox', function(e) {
      if (e.keyCode == 27) $.facebox.close()
    })
  }

  $.facebox.reveal = function(data, klass) {
    if (klass) $('#facebox .popup_data').addClass(klass)

    $('#facebox .popup_data').html(data)
    $('#facebox .loading').remove()
	
    $('#facebox .popup_content').fadeIn('normal', function(){
		$('#facebox .border_wrap').height($('#facebox .popup_data').height() + 18);
		setTimeout( function() {$('#facebox .border_wrap').height($('#facebox .popup_data').height() + 18);} , 1000)

		
		//console.log('Высота бокса - ' + $('#facebox .popup_data').height());
	});
	$('#facebox').css('margin-left','-' + $('#facebox').width()/2 + 'px');

	if ($(window).height() > $('#facebox').height())
		$('#facebox').css({
			'margin-top': '-' + $('#facebox').height()/2 + 'px',
			'top' : '50%'
		})
	else
		$('#facebox').css({
			'margin-top': '0px',
			'top' : '10px'
		});
	$(window).scrollTop(0);
		
	$('#facebox .border_wrap').height($('#facebox .popup_data').height() + 18);
	
	/*$('#facebox .switch a').toggle(function(){
		$(this).parent().children('p').show();	
		$('#facebox .border_wrap').height($('#facebox .popup_data').height() + 18);
								   
	}, function(){
		$(this).parent().children('p').hide();	
		$('#facebox .border_wrap').height($('#facebox .popup_data').height() + 18);

	});*/
  }
	
  $.facebox.close = function() {
    $(document).trigger('close.facebox')
    return false
  }

  $(document).bind('close.facebox', function() {
    $(document).unbind('keydown.facebox')
    $('#facebox .popup_content').fadeOut(function() {
      //$('#facebox .popup_data').removeClass().addClass('popup_data');
    })
	$('#jquery-overlay').fadeOut(function(){});
  })

  $.fn.facebox = function(settings) {
    $.facebox.init(settings)

    var image_types = $.facebox.settings.image_types.join('|')
    image_types = new RegExp('\.' + image_types + '$', 'i')

    function click_handler() {
      $.facebox.loading(true)

      // support for rel="facebox[.inline_popup]" syntax, to add a class
      var klass = this.rel.match(/facebox\[\.(\w+)\]/)
      if (klass) klass = klass[1]

      // div
      if (this.href.match(/#/)) {
        var url    = window.location.href.split('#')[0]
        var target = this.href.replace(url,'')
        $.facebox.reveal($(target).clone().show(), klass)

      // image
      } else if (this.href.match(image_types)) {
        var image = new Image()
        image.onload = function() {
          $.facebox.reveal('<div class="image"><img src="' + image.src + '" /></div>', klass)
        }
        image.src = this.href

      // ajax
      } else {
        $.get(this.href, function(data) { $.facebox.reveal(data, klass) })
      }

      return false
    }

    this.click(click_handler)
    return this
  }

  $.facebox.init = function(settings) {
    if ($.facebox.settings.inited) {
      return true
    } else {
      $.facebox.settings.inited = true
    }

    if (settings) $.extend($.facebox.settings, settings)
    $('body').append($.facebox.settings.facebox_html)

    var preload = [ new Image(), new Image() ]
    preload[0].src = $.facebox.settings.close_image
    preload[1].src = $.facebox.settings.loading_image

    $('#facebox').find('.b:first, .bl, .br, .tl, .tr').each(function() {
      preload.push(new Image())
      preload.slice(-1).src = $(this).css('background-image').replace(/url\((.+)\)/, '$1')
    })

    $('#facebox .close').click($.facebox.close)
    $('#facebox .close_image').attr('src', $.facebox.settings.close_image)
  }

  // getPageScroll() by quirksmode.com
  $.facebox.getPageScroll = function() {
    var xScroll, yScroll;
    if (self.pageYOffset) {
      yScroll = self.pageYOffset;
      xScroll = self.pageXOffset;
    } else if (document.documentElement && document.documentElement.scrollTop) {	 // Explorer 6 Strict
      yScroll = document.documentElement.scrollTop;
      xScroll = document.documentElement.scrollLeft;
    } else if (document.body) {// all other Explorers
      yScroll = document.body.scrollTop;
      xScroll = document.body.scrollLeft;	
    }
    return new Array(xScroll,yScroll) 
  }
  

  // adapter from getPageSize() by quirksmode.com
  $.facebox.getPageHeight = function() {
    var windowHeight
    if (self.innerHeight) {	// all except Explorer
      windowHeight = self.innerHeight;
    } else if (document.documentElement && document.documentElement.clientHeight) { // Explorer 6 Strict Mode
      windowHeight = document.documentElement.clientHeight;
    } else if (document.body) { // other Explorers
      windowHeight = document.body.clientHeight;
    }	
    return windowHeight
  }
  
  
})(jQuery);

