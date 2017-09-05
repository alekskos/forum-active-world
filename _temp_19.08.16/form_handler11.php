<?php

	//echo "hello form_handler" office@actimir.ru;
	mb_internal_encoding("UTF-8");
		$class		    = $_POST["class"];
		$org_name 		= $_POST["company"];
		$first_name 	= $_POST["name"];
		$last_name  	= $_POST["surname"];
		$phone_number = $_POST["phone"];
		$email 		    = $_POST["email"];
		$count        = $_POST["count"];
		$promo        = $_POST["promo"];

		$subject =  $class.' (Форум 28 октября 2016г.) - ЗАЯВКА ОТ: '. $_POST["last_name"];
		$message = "";
		$message .= "\r\nОрганизация: " . $org_name;
		$message .= "\nКоличество участников: " . $count . "\nИмя: " . $first_name . "\nФамилия: " . $last_name . "\nТелефон: " . $phone_number . "\nEmail: " . $email . "\nПромокод: " . $promo;

		$from = 'no-reply@actimir.ru';
		$to = $email;
		$headers .= "From: ".$from."\r\n";

		$result = mail($to, $subject, $message, $headers);

		$result = mail("office@actimir.ru, request@kreado.ru", $subject, $message, $headers);
		//$result = mail("viktor@kreado.ru", $subject, $message, $headers);

		$data = json_encode(array("result" => "ok"));

		header('Content-Type: application/json');
		echo $data;
		//office@actimir.ru
?>
