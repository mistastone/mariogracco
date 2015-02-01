// Text Slider Plugin

$(document).ready(function(){

	$('.textslider').slick({

		infinite: true,
		autoplay: true,
		autoplaySpeed: 7000,
		speed: 1000,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
	});
});

// Slick Nav

$(document).ready(function(){
	$('#menu').slicknav();
});

// Smooth Scroll

$(document).ready(function() {

    $('a[href*=#]').each(function() {
        if($(this).attr('href').indexOf("#") == 0) {
            $(this).click(function(e) {
              e.preventDefault();
              var targetOffset = $($(this).attr('href')).offset().top;
              $('body').animate({scrollTop: targetOffset-45}, 1000);
              $('#menu').slicknav('close');
            });
        }
    });

});
