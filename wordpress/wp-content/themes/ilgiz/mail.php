<?php
$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$message = "Имя: ".$name." | Номер: ".$tel." | email: ".$email." | Коментарий: ".$comment;
$headers = 'From: info@gimranovprint.ru' . "\r\n" .
           'Reply-To: info@gimranovprint.ru' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

mail('biloholovskyi@yandex.ru', "Новая заявка", $message, $headers);