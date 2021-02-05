<?php
//----Скрипт отправки почты через SMTP с использованием PHPMailer----
//Импорт классов PHPMailer в глобальное пространство имен. Они должны быть в верхней части скрипта, а не внутри функции
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if (!empty($_POST["btn"])) {
$name = $_POST["user_name"];
$email = $_POST["user_email"];
$comment = $_POST["text_comment"];
$proect = $_POST["attachment"];
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
$to = 'parovozof911@gmail.com'; //Адрес получателя
$mail -> isSMTP(); //Применение протокола SMTP
$mail -> Host = 'smtp.yandex.ru';//Адрес почтового сервера
$mail -> SMTPAuth = true; //Включение режима авторизации
$mail -> Username = 'inforemac@yandex.ru'; //Логин от доменной почты, подключенной к стороннему почтовому сервису (в данном случае в Яндекс.Почта)
$mail -> Password = 'INFOREMACa'; //Пароль от доменной почты
$mail -> SMTPSecure = 'ssl'; //Протокол шифрования
$mail -> Port = '465'; //Порт сервера SMTP
$mail -> CharSet = 'UTF-8'; //Кодировка
$mail -> setFrom($from, 'Заполнена форма на rem-ac.ru'); //Адрес и имя отправителя
$mail -> addAddress($to, 'rem-ac.ru'); //Адрес и имя получателя
$mail -> isHTML (true); //Установка формата электронной почты в HTML
$mail -> Subject = 'Заполнена форма на rem-ac.ru'; //Тема письма (заголовок)
$mail -> Body = "
<html>
<body>
<p>Имя отправителя: $name</p>
<p>Электронная почта: $email</p>
<p>Содержание сообщения: $comment</p>
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
 
?>
<style type="text/css">
body{

  /*text-align: center;*/

  margin: 10;

  font-family: Verdana, Arial, sans-serif;

  font-size: 16px;
  background: #000 url(https://www.nastol.com.ua/download.php?img=201404/1920x1080/nastol.com.ua-93161.jpg); /* Фоновый цвет и фоновый рисунок*/
		color: #fff; /*Цвет текста на странице*/
		background-attachment: fixed; /* Фон страницы фиксируется */
		background-repeat: repeat-x; /* Изображение повторяется по горизонтали */
} 

/* Настраиваем внешний вид полей ввода*/

input {

  display: inline-block;

  margin: 10px auto;

  border: 2px solid #eee;

  padding: 10px 20px;

  font-family: Verdana, Arial, sans-serif;

  font-size: 16px;

}

textarea {

  display: inline-block;

  margin: 10px auto;

  border: 2px solid #eee;

  padding: 10px 20px;

  font-family: Verdana, Arial, sans-serif;

  font-size: 16px;

}
</style>
<div align="center">
<form action="configuser.php" method="post">
<input name="contact-name" type="hidden"  value="<?=$name;?>"/><br>
<input name="contact-email" type="hidden"  value="<?=$email;?>"/><br>
<input size="30" name="contact-subject" type="hidden" value="https://rem-ac.ru"/><br>
<input name="contact-comment" type="hidden" value="<?=$comment;?>">
<br>
<input id="autoclick" type="submit" name="contact-button" value="Спасибо за заявку" />
</form></div>
<script>
document.getElementById('autoclick').click();
</script>

