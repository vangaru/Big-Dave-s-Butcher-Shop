$(function(){
	$('.revs-a').hover(
		function(){
			$('.revs-a').css('color', '#171717');
			$('.revs-a').css('text-shadow', '1px 1px 2px black, 0 0 1em white');
		},
		function(){
			$('.revs-a').css('color', 'white');
			$('.revs-a').css('text-shadow', '1px 1px 2px black, 0 0 1em gray');
		},
	)
})