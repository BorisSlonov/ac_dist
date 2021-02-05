<?php

header ("Content-Type: text/html; charset=utf-8"); //кодировка
$to = "rem-ac@mail.ru"; //получатель уведомлений
 
 $errors = array(); // контейнер для ошибок
    // проверяем корректность полей
    if($_POST['name'] == "")    $errors[] = "Поле 'Ваше имя' не заполнено!";
    if($_POST['phone'] == "")   $errors[] = "Поле 'Ваш телефон' не заполнено!";
 
    // если форма без ошибок
    if(empty($errors)){     
        // собираем данные из формы
        $message  = "Имя пользователя: " . $_POST['name'] . "<br/>";
        $message .= "Телефон пользователя: " . $_POST['phone'] . "<br/>";    
        send_mail($message); // отправим письмо
        // выведем сообщение об успехе
        $msg_box = "<span style='color: green;'>Сообщение успешно отправлено!</span>";
    }else{
        // если были ошибки, то выводим их
        $msg_box = "";
        foreach($errors as $one_error){
            $msg_box .= "<span style='color: red;'>$one_error</span><br/>";
        }
    }



$HTTP_HOST = parse_url ("http://".$_SERVER["HTTP_HOST"]); 
$HTTP_HOST = str_replace (array ("http://","www."), "", $HTTP_HOST["host"]);
$from = "".$HTTP_HOST; // отправитель. Если настраиваете smtp, не забудьте указать в $from вашу почту

$message = "<h2> ЗАКАЗАН РАСЧЁТ СТОИМОСТИ REM-AC.RU!</h2> 
		<p>Имя  - ".$_POST['name']."</p>
		<p>Телефон  - ".$_POST['phone']."</p>
		<hr>
		<p>Стеклопакет  - ".$_POST['window-type']."</p>
		<p>Тип окна  - ".$_POST['window-form']."</p>
		<hr>
		<p>Высота окна  - ".$_POST['window-height']."</p>
		<p>Ширина окна1  - ".$_POST['window-width-1']."</p>
		<p>Ширина окна2  - ".$_POST['window-width-2']."</p>
		<p>Ширина окна3  - ".$_POST['window-width-3']."</p>
		<p>Ширина окна4  - ".$_POST['window-width-4']."</p>
	";

echo $message;

$subject = '=?UTF-8?B?'.base64_encode('ЗАКАЗАН ОБРАТНЫЙ ЗВОНОК').'?=';  

$headers .= "Content-type: text/html; charset=utf-8\r\n"; 
$headers .= "From: REM-AC.RU <".$from.">"; 

if (mail($to, $subject, $message, $headers));
?>