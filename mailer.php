<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Отправка формы</title>
	<link rel="stylesheet" href="build/css/styles.min.css">
	<script src="https://use.fontawesome.com/81b0a5a4d5.js"></script>
</head>
<body>
	
	<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	if((isset($name)&&$name!="")&&(isset($email)&&$email!="")&&(isset($message)&&$message!="")){
		$to = 'bruslik.dmitry@gmail.com';
		$subject = "Новое письмо от работодателя!";
		$message = "
		<html>
		<head>
			<title>{$subject}</title>
		</head>
		<body>
			<p>{$name} пишет:</p>
			<p>{$message}</p>
			<p>&nbsp;</p>
			<hr/>
			<p>E-mail адрес: {$email}</p>
		</body>
		</html>";
		$headers  = "Content-type: text/html; charset=utf-8 \n";
		$send = mail($to, $subject, $message, $headers);
		if ($send == 'true'){
			echo '<center><h1>Спасибо за сообщение!</h1><br><a href="/">На главную</a></center>';
		}
		else{
			echo '<center><h1>Письмо не отправлено!</h1><br><p>Скорее всего что-то с хостингом</p><p>Вы можете написать мне в <a href="https://www.facebook.com/dmitrypacification" target="__blank">Facebook</a> или просто отправить письмо с на <a href="mailto:bruslik.dmitry@gmail.com" target="__blank">bruslik.dmitry@gmail.com</a></center>';
			$subjectReserve = "Дима! Проверь хостинг, люди работку тебе хотят дать с твоего CV";
			$message = "
			<html>
			<head>
				<title>{$subjectReserve}</title>
			</head>
			<body>
				<p>Тема: {$subject}</p>
				<p>{$name} пишет:</p>
				<p>{$message}</p>
				<p>&nbsp;</p>
				<hr/>
				<p>E-mail адрес: {$email}</p>
			</body>
			</html>";
			$headers  = "Content-type: text/html; charset=utf-8 \n";
			$send = mail($to, $subjectReserve, $message, $headers);
		}
	}
	else{
		echo '<center><h1>Письмо не отправлено!</h1><br><p>Что-то пошло не так, но Вы не переживайте, я сейчас узнаю от этом</p><p>Вы можете написать мне в <a href="https://www.facebook.com/dmitrypacification" target="__blank">Facebook</a> или просто отправить письмо с на <a href="mailto:bruslik.dmitry@gmail.com" target="__blank">bruslik.dmitry@gmail.com</a></center>';
		$subjectReserve2 = "Дима! Проверь хостинг, люди работку тебе хотят дать с твоего CV";
		$message = "
		<html>
		<head>
			<title>{$subjectReserve}</title>
		</head>
		<body>
			<p>Тема: {$subject}</p>
			<p>{$name} пишет:</p>
			<p>{$message}</p>
			<p>&nbsp;</p>
			<hr/>
			<p>E-mail адрес: {$email}</p>
			P.S. Валидация полей формы не прошла проверку.
		</body>
		</html>";
		$headers  = "Content-type: text/html; charset=utf-8 \n";
		$send = mail($to, $subjectReserve2, $message, $headers);
	}
	?>
</body>
</html>