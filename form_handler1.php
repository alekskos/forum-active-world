<?php

	//echo "hello form_handler" office@actimir.ru;
	mb_internal_encoding("UTF-8");
		$class		    = $_POST["class"];
		$org_name 		= $_POST["company"];
		$first_name 	= $_POST["first_name"];
		$last_name  	= $_POST["last_name"];
		if (empty($first_name)){
			$first_name 	= $_POST["name"];
			$last_name  	= $_POST["surname"];
		}
		$phone_number = $_POST["phone"];
		$email 		    = $_POST["email"];
		$count        = $_POST["count"];
		$promo        = $_POST["promo"];

		$source        = $_POST["source"];
		$medium        = $_POST["medium"];
		$campaign        = $_POST["campaign"];
		$content        = $_POST["content"];
		$term        = $_POST["term"];


		$subject =  $class.' (Форум 28 октября 2016г.) - ЗАЯВКА ОТ: '. $_POST["last_name"];
		$message = "";
		$message .= "\r\nОрганизация: " . $org_name;
		$message .= "\nКоличество участников: " . $count . "\nИмя: " . $first_name . "\nФамилия: " . $last_name . "\nТелефон: " . $phone_number . "\nEmail: " . $email . "\nПромокод: " . $promo;
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

		$result = mail($to, $subject, $message, $headers);
		$result = mail("office@actimir.ru, request@kreado.ru", $subject, $message, $headers);
		//$result = mail("viktor@kreado.ru", $subject, $message, $headers);


		$data = json_encode(array("result" => "ok"));

		header('Content-Type: application/json');
		echo $data;
?>
