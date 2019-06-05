<?
	require_once($_SERVER['DOCUMENT_ROOT'].'/application/lib/phpMailer/src/SMTP.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/application/lib/phpMailer/src/PHPMailer.php');


	// Переменные
	if(isset($_POST['popup-name']) && isset($_POST['popup-phone'])){
		$name = $_POST['popup-name'];
		$number = $_POST['popup-phone'];
		//$email = $_POST[‘email’];

		// Настройки
		$mail = new PHPMailer;
		$mail->CharSet = 'UTF-8';
		$mail->isSMTP(); 
		$mail->Host = 'smtp.mail.ru'; 
		$mail->SMTPAuth = true; 
		$mail->Username = 'asarkazyna@mail.ru'; // Ваш логин в Яндексе. Именно логин, без @yandex.ru
		$mail->Password = 'parol123'; // Ваш пароль
		$mail->SMTPSecure = 'ssl'; 
		$mail->Port = 25;
		$mail->setFrom('asarkazyna@mail.ru'); // Ваш Email
		$mail->addAddress('asarkazyna@mail.ru'); // Email получателя


		// Письмо
		$mail->isHTML(true); 
		$mail->Subject = 'ASARKAZYNA.KZ: Клиент заказал звонок'; // Заголовок письма
		$mail->Body = "Имя: $name \r\n Телефон: $number \r\n"; // Текст письма
		// Результат
		if(!$mail->send()) {
			//header('Location: /');
		 echo 'Message could not be sent.';
		 echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo 'ok';
		}
	}
