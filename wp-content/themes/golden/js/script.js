/*

CUSTOM JAVASCRIPT

*/


jQuery(document).ready(function ($) {

	/*$('#stage-login-btn').on('click', function() {
		var x = $('#pw').val();
	 	console.log(x);
	});*/

	/*$(window).scroll(function() {
		var wScroll = $(this).scrollTop();

		// console.log(wScroll);

		$('.stage-logo').css({
			'transform' : 'translate(0px, ' + wScroll / 6 + '%)'
		});
	});*/


	var fixedTop = $('.site-header').offset().top;

    $(window).scroll(function () {
        if ($(window).scrollTop() > fixedTop) {
            $('.site-header').addClass('site-header--active');
        }
        else {
            $('.site-header').removeClass('site-header--active');
        }
    });

    $('#btn-nav-mobile').on('click', function () {
    	$('#site-nav-mobile').slideToggle(function() {
    		$('#site-nav-mobile > ul').css('show-mobile');
    	});
    });

});