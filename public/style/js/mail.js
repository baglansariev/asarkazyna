/*$(document).ready(function(){
	$('.popup').submit(function(event){
		event.preventDefault();
		var str = $(this).serialize();

		$.ajax({
			type: "POST",
			url: "https://asarkazyna.kz/application/config/sent.php",
			data: str,
			success: function(){
				//location.href = '/application/config/sent.php';
				$('.popup-fields').after('<i style="color: green">Сообщение успешно отправлено</i>');
				setTimeout(function(){				
					$('.popup-container').css('display', 'none');
				}, 1000);
			}
		});
	});

	$('.contact-form').submit(function(event){
		event.preventDefault();

		$.ajax({
			type: "POST",
			url: "/application/config/sent.php",
			data: $(this).serialize(),
			success: function(){
				alert('Сообщение отправлено!');
			}
		});
	});
});