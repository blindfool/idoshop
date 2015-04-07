$(document).ready(function () {
	
//menu margins
	var w_logo = $('a.logo').outerWidth();
	$('.left_menu').css('margin-right', (w_logo-150)/2);
	$('.right_menu').css('margin-left', (w_logo-150)/2);
//scroll menu fix
	  var h_hght = 120; // высота шапки
	  var h_mrg = 75;    // отступ когда шапка уже не видна
	  $(function(){
	   $(window).scroll(function(){
		  var top = $(this).scrollTop();
		  var elem = $('.top_menu');
		  var header = $('header');
		  var big_logo = $('a.logo');
		  var sm_logo = $('a.logo_small');
		  if (top+h_mrg < h_hght) {
		   $('.slider_wrap').css('margin-top', 95);
		   $('.left_menu').css('margin-right', (w_logo-150)/2);
		   $('.right_menu').css('margin-left', (w_logo-150)/2);							  
		   header.removeClass('small');
		   elem.removeClass('small');
		   elem.css('top', (h_hght-top));	   

		  } else {
		   $('.slider_wrap').css('margin-top', 70);
		   $('.left_menu').css('margin-right', 0);
		   $('.right_menu').css('margin-left', 0);
		   header.addClass('small');
		   elem.addClass('small');
		   elem.css('top', h_mrg);
		  }
		});
	  });

//products
	var w_screen = screen.width;
	$('.products').css('height', w_screen);	

//news
	
	  
	$('.slider').mobilyslider({
		transition: "fade",
		animationSpeed: 500,
		autoplay: true,
		autoplaySpeed: 3000,
		arrowsHide: true,
		pauseOnHover: true,
		bullets: true
	});	
	$('.slider_2').mobilyslider({
		transition: "fade",
		animationSpeed: 500,
		autoplay: true,
		autoplaySpeed: 3000,
		arrowsHide: false,
		pauseOnHover: true,
		bullets: false
	});	

});