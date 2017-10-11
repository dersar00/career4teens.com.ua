<?php 
 	$name=htmlspecialchars($_POST['name']);
 	$email=htmlspecialchars($_POST['email']);
 	$phone=htmlspecialchars($_POST['phone']);
 	$message=htmlspecialchars($_POST['message']);
 	$ready_message = "Имя - ".$name." \r\n\r\nПочта - ".$email." \r\n\r\nНомер телефона - ".$phone." \r\n\r\nСообщение - ".$message;
 	if($name == '' || $email == '' || $phone == '' || $message == ''){
 		echo 'Заполните все поля';
 		exit;
 	}
 	//Отправка
 	$name = "=?utf-8?B?".base64_encode($name)."?=";
 	$headers = "From: $email\r\nReply to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
 	if(mail("career4teens@ukr.net", 'Заявка на регистрацию', $ready_message))
 		echo 'Сообщение отправлено';
 	else
 		echo 'Сообщение не отправлено';
 ?>