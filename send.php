<?php

$error = true;
$secret = '6Lcyha4UAAAAAFPnp2wqFfbE2NehpKNXGOqkwaQ3';

if (!empty($_POST['g-recaptcha-response'])) {
    $curl = curl_init('https://www.google.com/recaptcha/api/siteverify');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, 'secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $out = curl_exec($curl);
    curl_close($curl);
    
    $out = json_decode($out);
    if ($out->success == true) {
        $error = false;
    } 
}    

if ($error) {
    echo 'Ошибка заполнения капчи';
    exit;
}


// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
var_dump ($name, $email, $phone);
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "ok";
    $mail->CharSet = "UTF-8";
    
    // Настройки SMTP
    $mail->isSMTP();                       
    $mail->SMTPAuth   = true;
    $mail->SMTPDebug  = 2;

    // Настройки вашей почты
    $mail->Host = 'ssl://smtp.beget.com';
    $mail->Port = 465;
    $mail->Username = 'Admin.vsegda220v@vsegda220v.ru';
    $mail->Password = 'Vsegda5296';

/*     $mail->Host       = 'ssl://smtp.mail.com'; // SMTP сервера MAIL
    $mail->Port       = 465;
    $mail->Username   = 'adm.vsegda220v@mail.ru'; // Логин на почте
    $mail->Password   = 'Vsegda5296Vsegda'; // Пароль на почте */

    // От кого
    $mail->setFrom('Admin.vsegda220v@vsegda220v.ru', 'vsegda220v.ru');        

    // Кому
    $mail->addAddress('serega160202@mail.ru', 'Sergey Kravchenko');

    //$mail->addAddress('serega160202@mail.ru'); // Ещё один, если нужен
        $mail->isHTML(true);
    
        $mail->Subject = 'Новая заявка на сайте';
        $mail->Body    = "<b>Имя:</b> $name <br>
        <b>Почта:</b> $email<br><br>
        <b>Сообщение:</b><br>$phone";

// Проверяем отравленность сообщения
    if ($mail->send()) {
        $message = "ok";
        var_dump("Сообщение успешно отправлено");
    } else {
        echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
    }
}

catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}