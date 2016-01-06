window.jQuery = window.$ = jQuery;


/*-----------------------------------------------------------------------------------*/
/*	PRELOADER
/*-----------------------------------------------------------------------------------*/
jQuery(window).load(function () {
	//Preloader
	setTimeout("jQuery('#preloader').animate({'opacity' : '0'},300,function(){jQuery('#preloader').hide()})",800);
	setTimeout("jQuery('.preloader_hide, .selector_open').animate({'opacity' : '1'},500)",800);

});





/*-----------------------------------------------------------------------------------*/
/*	MENU
/*-----------------------------------------------------------------------------------*/
/* Superfish */
jQuery(document).ready(function() {
	if ($(window).width() >= 768){
		$('.navmenu').superfish({
			animation:{height:"show"},
			speed:250,
			speedOut:250,
			delay:0,
			cssArrows:false,
			pathClass:"current"
		});
	}
});

/* Sticky */
jQuery(window).load(function(){
	if (jQuery(window).width() >= 768){
		jQuery(".menu_block").sticky({ topSpacing: 0 });
	}
});

//MobileMenu
jQuery(document).ready(function() {
	if ($(window).width() < 768){
		jQuery('.menu_block .container').prepend('<a href="javascript:void(0)" class="menu_toggler"><i class="fa fa-align-justify"></i></a>');
		jQuery('header .navmenu').hide();
		jQuery('.menu_toggler, .navmenu ul li a').click(function(){
			jQuery('header .navmenu').slideToggle(300);
		});
		
		jQuery(".navmenu").before('<div class="clear"></div>');
	}
});




/*-----------------------------------------------------------------------------------*/
/*	SHOPPING BAG
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function() {
	jQuery('.shopping_bag .cart').slideUp(1);
	jQuery('.shopping_bag_btn').click(function(){
		jQuery('.shopping_bag .cart').slideToggle();
		jQuery('.shopping_bag .cart').parent().toggleClass('cart_active');
	});
});






/*-----------------------------------------------------------------------------------*/
/*	LOVE LIST
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function() {
	jQuery('.love_list .cart').slideUp(1);
	jQuery('.love_list_btn').click(function(){
		jQuery('.love_list .cart').slideToggle();
		jQuery('.love_list .cart').parent().toggleClass('cart_active');
	});
});






/*-----------------------------------------------------------------------------------*/
/*	TOP SEARCH FORM
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function() {
	jQuery('.top_search_form form').slideUp(1);
	jQuery('.top_search_btn').click(function(){
		jQuery('.top_search_form form').slideToggle();
		jQuery('.top_search_form form').parent().toggleClass('form_active');
	});
});




	


/*-----------------------------------------------------------------------------------*/
/*	FLEXSLIDER
/*-----------------------------------------------------------------------------------*/
jQuery(window).load(function(){
	//Top Slider
	$('.flexslider.top_slider').flexslider({
		animation: "fade",
		controlNav: true,
		directionNav: false,
		prevText: "",
		nextText: ""
	});
	
	//Top Slider BG
	jQuery('.flexslider.top_slider li img.slide_bg').each(function(){
		jQuery(this).parent().attr('style', 'background-image:url('+$(this).attr('src')+');');		
	});
	
	
	//Tovar View Carousel
	$('#carousel2').flexslider({
		animation: "slide",
		controlNav: false,
		directionNav: false,
		animationLoop: false,
		slideshow: false,
		direction: "vertical",
		asNavFor: '#slider2'
	});
	$('#slider2').flexslider({
		animation: "fade",
		controlNav: false,
		directionNav: false,
		animationLoop: false,
		slideshow: false,
		sync: "#carousel2"
	});
	jQuery('#carousel2 .slides li').click(function(){
		$('#carousel2 .slides li').removeClass('flex-active-slide');
		$(this).addClass('flex-active-slide');
		return false;
	});
	
	
	
	//Article Slider
	$('.flexslider.article_slider').flexslider({
		animation: "fade",
		controlNav: true,
		directionNav: false,
		prevText: "",
		nextText: ""
	});
	
	
});









/*-----------------------------------------------------------------------------------*/
/*	IFRAME TRANSPARENT
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function() {
	$("iframe").each(function(){
		var ifr_source = $(this).attr('src');
		var wmode = "wmode=transparent";
		if(ifr_source.indexOf('?') != -1) {
		var getQString = ifr_source.split('?');
		var oldString = getQString[1];
		var newString = getQString[0];
		$(this).attr('src',newString+'?'+wmode+'&'+oldString);
		}
		else $(this).attr('src',ifr_source+'?'+wmode);
	});
});









/*-----------------------------------------------------------------------------------*/
/*	MODAL TOVAR VIEW
/*-----------------------------------------------------------------------------------*/
$(window).load(function() {
	(function(){
		var container = $( "#modal-body" );
		var $items = $('.open-project-link');
		index = $items.length;
		$('.open-project-link').click(function(){
			$('#modal-body').addClass('modal-active');
			if ($(this).hasClass('active')){
			} 
			else { 
				lastIndex = index;
				index = $(this).index();
				$items.removeClass('active');
				$(this).addClass('active');
	
				var myUrl = $(this).find('.open-project').attr("href") + " .tover_view_page"; 
		  
				$('#tovar_content').animate({opacity:0},function(){
					$("#tovar_content").load(myUrl,function(e){
						
						//Tovar View Carousel
						$('#carousel1').flexslider({
							animation: "slide",
							controlNav: false,
							directionNav: false,
							animationLoop: false,
							slideshow: false,
							direction: "vertical",
							asNavFor: '#slider1'
						});
						$('#slider1').flexslider({
							animation: "fade",
							controlNav: false,
							directionNav: false,
							animationLoop: false,
							slideshow: false,
							sync: "#carousel1"
						});
						
						jQuery('#carousel1 .slides li').click(function(){
							$('#carousel1 .slides li').removeClass('flex-active-slide');
							$(this).addClass('flex-active-slide');
							return false;
						});
						
						//fancySelect
						$('.basic').fancySelect();
						
					});
					$('#tovar_content').animate({opacity:1});
				});
				
		    
				//Project Page Open
				$('#modal-body').show(function(){
					$('#tovar_content');}).show(2000,function(){
						$('.element_fade_in').each(function (){
							$(this).appear(function(){
								$(this).delay(100).animate({opacity:1,right:"0px"},1000);
							});	
						});
					});
			} return false;       
		});
	
		//Project Page Close
		$(document).on('click', '#tover_view_page_close, .close_block', function(event) {
			$('#tovar_content').animate({opacity:0}, 400,function(){	
				$('#modal-body').removeClass('modal-active').hide(400);
			});
			
			$items.removeClass('active');
			return false;
		});
	
	})();
});






/*-----------------------------------------------------------------------------------*/
/*	FANCYSELECT
/*-----------------------------------------------------------------------------------*/
$(document).ready(function() {
	$('.basic').fancySelect();
});







/*-----------------------------------------------------------------------------------*/
/*	PARRALAX
/*-----------------------------------------------------------------------------------*/
$(window).load(function() {
	if ($(window).width() > 1025){
		jQuery('.flexslider.top_slider .slides li').parallax("50%", -0.5);
		jQuery('.parallax').parallax("50%", -0.5);
	}
	
});







/*-----------------------------------------------------------------------------------*/
/*	SCROLL TOP
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function() {	
	$("a.back_top").click(function() {
		$("html, body").animate({ scrollTop: 0 }, "slow");
		return false;
	});
});






/*-----------------------------------------------------------------------------------*/
/*	TOVAR FOTO HEIGHT
/*-----------------------------------------------------------------------------------*/
jQuery(window).load(function(){
	tovarfotoHeight();

});

jQuery(window).resize(function(){
	tovarfotoHeight();
	
});

function tovarfotoHeight() {
	var tovar_img_h = $('.tovar_img_wrapper img').height();
			
	$('.tovar_img_wrapper').css('height', tovar_img_h);
}





/*-----------------------------------------------------------------------------------*/
/*	Tovar Sizes
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function() {
	// toggle variable sizes of all elements
	$('#toggle-sizes').find('a.view_full').click(function(){
		$('a.view_box').removeClass('active');
		$(this).addClass('active');
		$('.shop_block').addClass('variable-sizes').isotope('reLayout');
		return false;
	});
	$('#toggle-sizes').find('a.view_box').click(function(){
		$('a.view_full').removeClass('active');
		$(this).addClass('active');
		$('.shop_block').removeClass('variable-sizes').isotope('reLayout');
		return false;
	});
});





/*-----------------------------------------------------------------------------------*/
/*	Tovar Sizes
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function() {
    $('ul.tabs').on('click', 'li:not(.current)', function() {
		$(this).addClass('current').siblings().removeClass('current')
		.parents('div.tovar_information').find('div.box').eq($(this).index()).fadeIn(150).siblings('div.box').hide();
	})
});






/*-----------------------------------------------------------------------------------*/
/*	404 PAGE
/*-----------------------------------------------------------------------------------*/
jQuery(window).load(function(){
	errorpageHeight();

});

jQuery(window).resize(function(){
	errorpageHeight();
	
});

function errorpageHeight() {
	if ($(window).width() > 1025){
		var body_h = $(window).height();
		var footer_h = $('footer').height() + 34;
		var errorpage_h = Math.abs(body_h - footer_h);
		$('.page404').css('min-height', errorpage_h);
		
		var wrapper404_h = $('.wrapper404').height() - 100;
		var padding_top = Math.abs((errorpage_h - wrapper404_h)/2);
		
		$('.wrapper404').css('padding-top', padding_top);
	}
}






/*-----------------------------------------------------------------------------------*/
/*	PRICE HOVER EFFECT
/*-----------------------------------------------------------------------------------*/
$(document).ready(function() {
	$(".price_item").hover(
		function () {
			$(this).addClass("price_active");
		}
	);
	$(".price_item").hover(
		function () {
			$('.price_item').removeClass("price_active");
				$(this).addClass("price_active");
			}
		);
});






/*-----------------------------------------------------------------------------------*/
/*	ACCORDION TOGGLES
/*-----------------------------------------------------------------------------------*/
$(document).ready(function(){
	
	$("#accordion h4").eq(2).addClass("active");
	$("#accordion .accordion_content").eq(2).show();

	$("#accordion h4").click(function(){
		$(this).next(".accordion_content").slideToggle("slow")
		.siblings(".accordion_content:visible").slideUp("slow");
		$(this).toggleClass("active");
		$(this).siblings("h4").removeClass("active");
	});

});






/*-----------------------------------------------------------------------------------*/
/*	VIDEO PLAYER
/*-----------------------------------------------------------------------------------*/
$(document).ready(function(){
	$('.video_container').click(function(){
	var video = '<iframe src="'+ $(this).attr('data-video') +'"></iframe>';
	$(this).replaceWith(video); });
});




/*-----------------------------------------------------------------------------------*/
/*	CONTACT FORM
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function() {
	$("#ajax-contact-form").submit(function() {
		var str = $(this).serialize();		
		$.ajax({
			type: "POST",
			url: "contact_form/contact_process.php",
			data: str,
			success: function(msg) {
				// Message Sent - Show the 'Thank You' message and hide the form
				if(msg == 'OK') {
					result = '<div class="notification_ok">Your message has been sent. Thank you!</div>';
					$("#fields").hide();
				} else {
					result = msg;
				}
				$('#note').html(result);
			}
		});
		return false;
	});
});





