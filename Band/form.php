<?php
$mailto = "misima.89@mail.ru";
$subject = $_POST['name'];
$content = $_POST['comments'];
$message = $_POST['email'];
$statusError = "";
$statusSuccess = "";
$errors_name = '������� ���� ���';
$errors_mailfrom = '������� ���� E-mail �����';
$errors_incorrect = '��������� ��������� ��� E-mail �����';
$errors_message = '�������� ����� ������ ���������';
$errors_subject = '������� ���� ���������';
$captcha_error = '��������� ������������ ����� ��������� ����';
$send = '���� ��������� ����������';




 mail("$mailto","$subject","$message", "$content");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1 style="text-align: center;">������� �� ������!</h1>
</body>
</html>


