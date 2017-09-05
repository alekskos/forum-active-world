<?php

	//echo "hello form_handler" office@actimir.ru;
	mb_internal_encoding("UTF-8");
		$event_name 	= $_POST["event_name"];
		$org_name 		= $_POST["org_name"];
		$first_name 	= $_POST["first_name"];
		$last_name  	= $_POST["last_name"];
		$phone_number = $_POST["phone_number"];
		$email 				= $_POST["email"];
		$source       = $_POST["source"];
		$medium       = $_POST["medium"];
		$campaign     = $_POST["campaign"];
		$content      = $_POST["content"];
		$term        	= $_POST["term"];



		$subject = 'Хочу участвовать (Форум 28 октября 2016г.) - ЗАЯВКА ОТ: '. $_POST["last_name"];
		$message = "\r\nИмя: " . $first_name . "\nФамилия: " . $last_name . "\nТелефон: " . $phone_number . "\nEmail: " . $email;
		if (!empty($source)||!empty($medium)||!empty($campaign)||!empty($content)||!empty($term)){
			$message .= "\nUTM:";
			if (!empty($source)){
				$message .= "\nsource: ".$source;
			}
			if (!empty($medium)){
				$message .= "\nmedium: ".$medium;
			}
			if (!empty($campaign)){
				$message .= "\ncampaign: ".$campaign;
			}
			if (!empty($content)){
				$message .= "\ncontent: ".$content;
			}
			if (!empty($term)){
				$message .= "\nterm: ".$term;
			}
		};
		$from = 'no-reply@actimir.ru';
		$to = $email;
		$headers .= "From: ".$from."\r\n";
		if (!empty($first_name)){
			$result = mail("office@actimir.ru,request@kreado.ru", $subject, $message, $headers);
			$subject = 'Заявка на участие (Форум 28 октября 2016г.)';
			$result = mail($to, $subject, $message, $headers);
		} else {
			$result = mail("ilya@kreado.ru", $subject, $message, $headers);
		}
		//$result = mail("viktor@kreado.ru", $subject, $message, $headers);

		$data = json_encode(array("result" => "ok"));

		header('Content-Type: application/json');
		echo $data;

		header("Location: /");
?>
