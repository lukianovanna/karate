<?php

$name = $_POST['name'];
$telephon = $_POST['telephon'];
$adress = $_POST['adress'];

$name = htmlspecialchars($name);
$telephon = htmlspecialchars($telephon);
$adress = htmlspecialchars($adress);

$name = urldecode($name);
$telephon = urldecode($telephon);
$adress = urldecode($adress);

$name = trim($name);
$telephon = trim($telephon);
$adress = trim($adress);

//echo $name;
//echo "<br>";
//echo $telephon;

if (mail("fominanna@list.ru", "Заявка с сайта", "ФИО:".$name.". Tel: ".$telephon ,"From: example2@mail.ru \r\n"))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}


?>