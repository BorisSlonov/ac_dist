<?php
//----Скрипт отправки почты через SMTP с использованием PHPMailer----
//Импорт классов PHPMailer в глобальное пространство имен. Они должны быть в верхней части скрипта, а не внутри функции
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if (!empty($_POST["btn"])) {
$name = $_POST["contact-name"];
$email = $_POST["contact-email"];
$subject = $_POST["contact-subject"];
$comment = $_POST["contact-comment"];
$form = $_POST["user_zap"];

if (!empty($GLOBALS['alert'])) {
$alert = 'Данные из формы не отправлены. Обнаружены следующие ошибки: \n'.$alert;
include "alert.php";
}
else {
//Подключение библиотеки
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer(); //Инициализация класса
$from = 'inforemac@yandex.ru'; //Адрес почты, с которой идет отправка письма
$to = '$email'; //Адрес получателя
$mail -> isSMTP(); //Применение протокола SMTP
$mail -> Host = 'smtp.yandex.ru';//Адрес почтового сервера
$mail -> SMTPAuth = true; //Включение режима авторизации
$mail -> Username = 'inforemac@yandex.ru'; //Логин от доменной почты, подключенной к стороннему почтовому сервису (в данном случае в Яндекс.Почта)
$mail -> Password = 'INFOREMACa'; //Пароль от доменной почты
$mail -> SMTPSecure = 'ssl'; //Протокол шифрования
$mail -> Port = '465'; //Порт сервера SMTP
$mail -> CharSet = 'UTF-8'; //Кодировка
$mail -> setFrom($from, 'Вы заполнили форму на сайте на rem-ac.ru'); //Адрес и имя отправителя
$mail -> addAddress($to, 'rem-ac.ru'); //Адрес и имя получателя
$mail -> isHTML (true); //Установка формата электронной почты в HTML
$mail -> Subject = 'Спасибо за заполнение формы на rem-ac.ru'; //Тема письма (заголовок)
$mail -> Body = "
<html>
<body>
<p>Заявка из формы: $form</p>
<p>Ваше имя: $name</p>
<p>Электронная почта: $email</p>
<p>Содержание вашего сообщения: $comment</p>
<p>Спасибо за заявку - $subject</p><br>
<p>Скоро я свяжусь с Вами</p>------------------------------------------------------------------------<br>
<h4><font color='green'>С Уважением, AC-REM.RU</font></h4><br>
<div align='center'>
<img width='500' height='450' src='https://rem-ac.ru/img/glavnay/1/1.jpg'>

 </body>
</html>
"; //Содержимое письма
$mail -> AltBody = 'Текст альтернативного письма'; //Альтернативное письмо в случае, если почтовый клиент не поддерживает формат HTML
$mail -> SMTPDebug = 0; //Включение отладки SMTP: 0 - выкл (для штатного использования), 1 = сообщения клиента, 2 - сообщения клиента и сервера
if ($mail -> send()) {
$alert = 'Сообщение отправлено'; //Вывод сообщения в диалоговом окне браузера об успешной отправке письма
}
else {
$alert = 'Ошибка, письмо не может быть отправлено: '.$mail -> ErrorInfo; //Вывод сообщения об ошибке
}

}
}
    header('Refresh: 0; URL=/');
    echo '<h1 align="center">Ваша заявка успешно отправлена! Перейдите на <a href="/index.html">ГЛАВНУЮ</a> страницу!</h1>'
?>