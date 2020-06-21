$(function(){

	/*При наведении курсора на элемент списка с навигацией, цвет элемента списка
	должен меняться на серый, а также вокруг него должна появляться белая тень*/ 

	$('#home-li').hover(
		function(){
			$('#home-li').css('color', '#171717');
			$('#home-li').css('text-shadow', '1px 1px 2px black, 0 0 1em white');
		},
		function(){
			$('#home-li').css('color', 'black');
			$('#home-li').css('text-shadow', '1px 1px 2px black, 0 0 1em red');
		},
	);

	$('#author-li').hover(
		function(){
			$('#author-li').css('color', '#171717');
			$('#author-li').css('text-shadow', '1px 1px 2px black, 0 0 1em white');
		},
		function(){
			$('#author-li').css('color', 'black');
			$('#author-li').css('text-shadow', '1px 1px 2px black, 0 0 1em red');
		},
	);
	

})