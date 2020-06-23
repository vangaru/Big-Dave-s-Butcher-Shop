$(function(){
	$('.sign-up').hover(
		function(){
			$('.sign-up').css('color', '#171717');
			$('.sign-up').css('text-shadow', '1px 1px 2px black, 0 0 1em white');
		},
		function(){
			$('.sign-up').css('color', 'white');
			$('.sign-up').css('text-shadow', '1px 1px 2px black, 0 0 1em gray');
		},
	)
})