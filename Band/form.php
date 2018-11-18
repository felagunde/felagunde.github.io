<?php
$mailto = "misima.89@mail.ru";
$subject = $_POST['name'];
$content = $_POST['comments'];
$message = $_POST['email'];
$statusError = "";
$statusSuccess = "";
$errors_name = 'Введите ваше имя';
$errors_mailfrom = 'Введите свой E-mail адрес';
$errors_incorrect = 'Заполните правильно Ваш E-mail адрес';
$errors_message = 'Наберите текст вашего сообщения';
$errors_subject = 'Введите тему сообщения';
$captcha_error = 'Проверьте правильность ввода защитного кода';
$send = 'Ваше сообщение отправлено';




 mail("$mailto","$subject","$message", "$content");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1 style="text-align: center;">Спасибо за письмо!</h1>
</body>
</html>


