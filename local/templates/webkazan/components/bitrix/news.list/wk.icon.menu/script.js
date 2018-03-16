$(function(){

	$('.directions-block .direction a').click(function(){

		$('#' + $(this).attr('class')).slideDown(600, function(){

			$(this).addClass('active');
		});

		$('.direction_text.active').slideUp(600, function(){

			$(this).removeClass('active');
		});
	});
})