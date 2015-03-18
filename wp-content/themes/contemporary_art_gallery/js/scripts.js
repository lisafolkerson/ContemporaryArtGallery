app = {};

$('.content h2.static-page-bg').append(function(){
	console.log ('hover success!');
	var img = $(this).data('img');
	console.log(img);
	$('.bgimage').css({
		background : 'url('+img+') center no-repeat',
		backgroundSize : 'cover',
		backgroundAttachment : 'fixed'
	})
});

$('.content h2').mouseover(function(){
	console.log ('hover success!');
	var img = $(this).data('img');
	console.log(img);
	$('.bgimage').css({
		background : 'url('+img+') center no-repeat',
		backgroundSize : 'cover',
		backgroundAttachment : 'fixed'
	})
});

$(function(){
	// app.init();
});