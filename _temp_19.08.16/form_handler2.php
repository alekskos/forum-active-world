<?php

	//echo "hello form_handler" office@actimir.ru;
	mb_internal_encoding("UTF-8");
		$first_name 	= $_POST["first_name"];
		$last_name  	= $_POST["last_name"];
		$phone_number = $_POST["phone"];
		$email 		    = $_POST["email"];
		$select       = $_POST["select"];

		$subject = 'Заявка на консалтинг (Форум 28 октября 2016г.) - ЗАЯВКА ОТ: '. $_POST["last_name"];
		$message .= "\r\nИмя: " . $first_name . "\nФамилия: " . $last_name . "\nТелефон: " . $phone_number . "\nEmail: " . $email . "\nСпикер: " . $select;

		$from = 'no-reply@actimir.ru';
		$to = $email;
		$headers .= "From: ".$from."\r\n";

		$result = mail($to, $subject, $message, $headers);

		$result = mail("office@actimir.ru, request@kreado.ru", $subject, $message, $headers);
		//$result = mail("viktor@kreado.ru", $subject, $message, $headers);

		$data = json_encode(array("result" => "ok"));

		header('Content-Type: application/json');
		echo $data;
?>
