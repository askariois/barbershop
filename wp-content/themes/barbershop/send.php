<?php

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';

$name = $_POST['name'];
$fullnmae = $_POST['fullname'];
$date = $_POST['date'];
$time = $_POST['time'];
$phone = $_POST['phone'];
$textarea = $_POST['message'];

$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "Мы получили ваше письмо и в ближайшее время свяжемся с вами.";
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth = true;
    $mail->Host = 'ssl://smtp.mail.ru';
    $mail->Username = 'barber.shop.17@mail.ru';
    $mail->Password = 'COiRA$iyfo23';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('barber.shop.17@mail.ru');
    $mail->addAddress('askar_1996@list.ru');    // Здесь нужно поменять почту

    $mail->isHTML(true);
    $mail->Subject = 'Обратная связь с сайта Barbershop';
    $mail->Body = "<b>Имя:</b> $name <br>
        <b>Фамилия:</b> $fullnmae<br><br>
        <b>Дата:</b>$date<br><br>
        <b>Время:</b>$time<br><br>
        <b>Телефон:</b>$phone<br><br>
        <b>Сообщение:</b>$textarea ";
    if ($mail->send()) {
        echo "$msg";
        exit;
    } else {
        echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
    }
} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
