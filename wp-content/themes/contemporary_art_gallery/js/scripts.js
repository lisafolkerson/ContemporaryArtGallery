app = {};

$('.content h2').mouseover(function(){
	console.log ('hover success!');
	var img = $(this).data('img');
	console.log(img);
	$('.bgimage').css({
		background : 'url('+img+') center no-repeat',
		backgroundSize : 'cover'
	})
	//$('#nanana').attr('style="background-image: url(<?php echo the_post_thumbnail(\'large\'); ?>)"')‌​;
});

$(function(){
	// app.init();
});