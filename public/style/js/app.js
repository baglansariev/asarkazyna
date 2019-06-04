$(function(){
	// $()
	$('.menu span').on('click', function(){
		$('.menu-list').toggle('flex');
		$('.menu-list').css('display', 'flex');
		$('.menu span').css({'top': 0, 'right': '10px'});
	});
});