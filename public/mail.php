<?php
$name       = 'hhhh';
$from       = 'temaror@yandex.ru';
$subject    = 'tema';
$message    = 'text';
$to   		= 'temaror@gmail.com';//replace with your email

$headers = "MIME-Version: 1.0";
$headers .= "Content-type: text/plain; charset=UTF-8";
$headers .= "From: {$name} <{$from}>";
$headers .= "Reply-To: <{$from}>";
$headers .= "Subject: {$subject}";
$headers .= "X-Mailer: PHP/".phpversion();
print_r($headers);
mail($to, $subject, $message, $headers);

die;
