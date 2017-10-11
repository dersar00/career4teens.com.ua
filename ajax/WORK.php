<?php 
 	$name=htmlspecialchars($_POST['name']);
 	$email=htmlspecialchars($_POST['email']);
 	$phone=htmlspecialchars($_POST['phone']);
 	$message=htmlspecialchars($_POST['message']);
 	if($name == '' || $email == '' || $phone == '' || $message == ''){
 		echo 'Заполните все поля';
 		exit;
 	}
 	//Отправка
 	$name = "=?utf-8?B?".base64_encode($name)."?=";
 	$headers = "From: $email\r\nReply to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
 	if(mail("80hate08@ukr.net", $name, $phone, $message))
 		echo 'Сообщение отправлено';
 	else
 		echo 'Сообщение не отправлено';
 ?>