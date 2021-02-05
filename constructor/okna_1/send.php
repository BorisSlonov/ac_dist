<?php

$to = "rem-ac@mail.ru";
$subject = "ЗАКАЗ ОКНА С САЙТА REM-AC.RU";
$headers = "From: Заказ окна <info@rem-ac.ru>\r\nContent-type: text/html; charset=utf-8 \r\n";


	$message = "<center><h2>Характеристики заказа!</h2></center> 
		<p>Имя:   ".$_POST['name']."</p>
		<p>Телефон:   ".$_POST['phone']."</p>
		<hr>
		<p>Стеклопакет:   ".$_POST['paket']."</p>
		<p>Тип окна:   ".$_POST['type']."</p>
		<img src='http://www.veryline.ru/clients/okna1/okno/templates/img/okno.png' />
		<p>Ширина окна:   ".$_POST['width']."</p>
		<p>Высота окна:   ".$_POST['height']."</p>
		<p>Тип вашего дома:   ".$_POST['house_type']."</p>
		<p>Подоконник:   ".$_POST['podokonnik']."</p>
		<p>Отлив:   ".$_POST['otliv']."</p>
		<p>Откосы:   ".$_POST['otkosy']."</p>
		<p>Ламинат:   ".$_POST['laminat']."</p>
		<img src='http://www.veryline.ru/clients/okna1/okno/templates/img/laminat.png' />
		<hr>
		<center><p style='font-size:19px;font-weight:bold;'>Параметры стекол</p></center> 
		<p>Энергосбережение:   ".$_POST['energy_save']."</p>
		<p>Солнцезащита:   ".$_POST['sun_guard']."</p>
		<p>Шумоизоляция:   ".$_POST['sound_isolation']."</p>
		<p>Безопасность:   ".$_POST['safety']."</p>
		<hr>
		<center><p style='font-size:19px;font-weight:bold;'>Расчет стоимости</p></center> 
		<p>Москитная сетка:   ".$_POST['moskitnaya_setka']."</p>
		<p>Стоимость отлива:   ".$_POST['otliv2']."</p>
		<p>Стоимость откоса:   ".$_POST['otkos2']."</p>
		<p>Стоимость ламината:   ".$_POST['laminat2']."</p>
		<p>Стоимость москитной сетки:   ".$_POST['moskitnay2']."</p>
		<p>Стоимость подоконник:   ".$_POST['podokonnik2']."</p>
		<p>Стоимость профиля:   ".$_POST['prof2']."</p>
		<p>Стоимость стёкол::   ".$_POST['stekol2']."</p>
		<p>Стоимость инсталляции:   ".$_POST['instal2']."</p>
		<p>Стоимость Двери:   ".$_POST['dvery2']."</p>
		<h1>Сумма Итого:   ".$_POST['itogo2']."</h1>
	";

mail ($to, $subject, $message, $headers)
	
//echo "Спасибо, Ваша заявка отправлена!";	

?>