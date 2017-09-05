<?php

	//echo "hello form_handler" office@actimir.ru;
	mb_internal_encoding("UTF-8");
	if (!empty($_POST)) {
		$event_name 	= $_POST["event_name"];
		$org_name 		= $_POST["org_name"];
		$first_name 	= $_POST["first_name"];
		$last_name  	= $_POST["last_name"];
		$phone_number = $_POST["phone_number"];
		$email 				= $_POST["email"];
	}

		$subject = 'Хочу участвовать (Форум 28 октября 2016г.) - ЗАЯВКА ОТ: '. $_POST["last_name"];
		$message = "\r\nИмя: " . $first_name . "\nФамилия: " . $last_name . "\nТелефон: " . $phone_number . "\nEmail: " . $email;

		$from = 'Активный Мир';
		$to = $email;
		$headers .= "From: ".$from."\r\n";

		$result = mail($to, $subject, $message, $headers);

		$result = mail("office@actimir.ru,request@kreado.ru", $subject, $message, $headers);

		$data = json_encode(array("result" => "ok"));

		header('Content-Type: application/json');
		echo $data;
?>
