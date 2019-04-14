<?php
$fio = $_POST['Имя'];
$email = $_POST['E-mail'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("panvoda@ukr.net", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: pw@bigmir.net \r\n"))
 {     echo "сообщение успешно отправлено"; 
} else { 
    echo "при отправке сообщения возникли ошибки";
}?>