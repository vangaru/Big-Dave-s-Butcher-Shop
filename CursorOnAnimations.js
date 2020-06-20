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

	/*При наведении курсора на услугу, должна увеличичваться тень вокруг 
	фотографии услуги, и появляться белая тень вокруг описания услуги*/

	$('.moto-ph, .fix').hover(
		function(){
			$('.moto-ph').css('box-shadow', '0 0 45px 0.5px white');
			$('.fix').css('text-shadow', '1px 1px 2px black, 0 0 1em white');
		},
		function(){
			$('.moto-ph').css('box-shadow', '0 0 25px 0.5px white');
			$('.fix').css('text-shadow', '1px 1px 2px black, 0 0 1em black');
		},
	);

	$('.barbeque-ph, .cooking').hover(
		function(){
			$('.barbeque-ph').css('box-shadow', '0 0 45px 0.5px white');
			$('.cooking').css('text-shadow', '1px 1px 2px black, 0 0 1em white');
		},
		function(){
			$('.barbeque-ph').css('box-shadow', '0 0 25px 0.5px white');
			$('.cooking').css('text-shadow', '1px 1px 2px black, 0 0 1em black');
		},
	);


})