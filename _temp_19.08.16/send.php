<?php
function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);

    return $value;
}

function check_length($value = "", $min, $max) {
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
  $class =$_POST['class'];

	$name = clean($name);
	$surname = clean($surname);
	$email = clean($email);
	$phone = clean($phone);

	if(!empty($name) && !empty($surname) && !empty($email) && !empty($phone)) {
	    $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL);

	    if(check_length($name, 2, 25) && check_length($surname, 2, 50) && check_length($phone, 2, 1000) && $email_validate) {
        $subject = 'Активный мир (Форум 28 октября 2016г.) - ЗАЯВКА ОТ: '. $surname;

        $from = 'Активный Мир';
    		$to = $email;
    		$headers .= "From: ".$from."\r\n";

    		$result = mail($to, $subject, $message, $headers);

    		$result = mail("ilya@kreado.ru", $subject, $message, $headers);

	    } else {
	        echo "Введенные данные некорректные";
	    }
	} else {
	    echo "Заполните пустые поля";
	}
} else {
	header("Location: index.php");
}
