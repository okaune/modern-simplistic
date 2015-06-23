$(document).ready(function(){

	// Animated scroll on hash linking
	var $root = $('html, body');
	$('a').click(function() {
		var href = $.attr(this, 'href');
		$root.animate({
			scrollTop: $(href).offset().top
		}, 500, function () {
			window.location.hash = href;
		});
		return false;
	});

	// PARRALAX
	// Cache the Window object
	$window = $(window);
                
	$('section[data-type="background"]').each(function(){
		var $bgobj = $(this); // assigning the object
                    
		$(window).scroll(function() {
                    
			// Scroll the background at var speed
			// the yPos is a negative value because we're scrolling it UP!								
			var yPos = -($window.scrollTop() / $bgobj.data('speed'));
			
			// Put together our final background position
			var coords = '50% '+ yPos + 'px';

			// Move the background
			$bgobj.css({ backgroundPosition: coords });
		
		}); // window scroll Ends

	});


	//CSS CHANGE ON SCROLL POSITION
	function scroll_style() {
	   var window_top = $(window).scrollTop();
	   var div_top = $('#profile').offset().top + 30;

	   

	   if (window_top > div_top){
	      $('header').css({"box-shadow":"1px 1px 10px #aaaaaa"});
	      $('header a').css({"line-height":"60px"});
	   } else {
	   	  $('header').css({"box-shadow":"none"});
	   	  $('header a').css({"line-height":"90px"});
	   }
	}

	$(function() {
	  $(window).scroll(scroll_style);
	  scroll_style();
	});

	//On start scroll
	if ($('#profile').length == false) {
		$(window).scroll(function() {
	    	if( $(this).scrollTop() >= 30 ) {
	    		$('header').css({"box-shadow":"1px 1px 10px #aaaaaa"});
		    	$('header a').css({"line-height":"60px"});
	    	} else {
				$('header').css({"box-shadow":"none"});
				$('header a').css({"line-height":"90px"});
			}
		});
	}

});