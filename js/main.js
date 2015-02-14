// Riding Image Boxes on Home Page

$('.cityinfo h4').click(function(){
	$('.cityinfo p').toggle('slow');
});

$('.boundaryinfo h4').click(function(){
	$('.boundaryinfo p').toggle('slow');
});




// Sticky Nav

$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('header').addClass("sticky");
    }
    else{
        $('header').removeClass("sticky");  
    }
});

$(document).scroll(function() {
	if ($(window).width() > 820) {
		var y = $(this).scrollTop();
		if (y > 400) {
		$('.scrollup').fadeIn();
		} else { 
		$('.scrollup').fadeOut();
		}
	}
}); 

// Scroll to Top

$('.scrollup').click(function(){
	$('html, body').animate({scrollTop : 0},800);
	return false;
});


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

// $(document).ready(function() {

//     $('a[href*=#]').each(function() {
//         if($(this).attr('href').indexOf("#") == 0) {
//             $(this).click(function(e) {
//               e.preventDefault();
//               var targetOffset = $($(this).attr('href')).offset().top;
//               $('body').animate({scrollTop: targetOffset-45}, 1000);
//               $('#menu').slicknav('close');
//             });
//         }
//     });

// });

// AJAX Email send feature
$('#signup').click(function() {
		
		var first = $('input[name=first]');
		var last = $('input[name=last]');
		var email = $('input[name=email]');
		// var password = $('input[name=password]');
		// var membership = $('input[name=membership]');
		// var donate = $('input[name=donate]'); 
		// var raisefunds = $('input[name=raisefunds]');
		// var organize = $('input[name=organize]');
		// var organize = $('input[name=prepare]');

		var options = "";

		$('input[type=checkbox]').each(function () {
           if (this.checked) {
              options += $(this).val() + " / "; 
           }
	}); 

		options = options.slice(0, -2);
		
		var data ='email=' + email.val() + '&' + 'first=' + first.val()+ '&' + 'last=' + last.val()+ '&' + 'options=' + options;
		 
		// Disable fields 
		$('.text').attr('disabled','true');
		
		// Start jQuery
		$.ajax({
		
			// PHP file that processes the data and send mail
			url: "signup.php",	
			
			// GET method is used
			type: "GET",

			// Pass the data			
			data: data,		
			
			//Do not cache the page
			cache: false,
			
			// Success
			success: function (html) {				
					
				//show the success message
				$('.success-message').slideDown('slow');
										
				// Disable send button
				$('#send').attr('disabled',true);
					
			}		
		});
	
		return false;
		
	});


