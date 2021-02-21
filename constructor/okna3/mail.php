
<?php

$domen=str_replace ('mail.php', '',$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); 
$domen = 'http://'.$domen;

$fname="output/".time().".png";
$flink=$domen.$fname;

	if (!isset($_POST["phone"]))   {$_POST["phone"] = ' ';}
	if (!isset($_POST["email"])) {$_POST["email"] = ' ';}
	if (!isset($_POST["name"])) {$_POST["name"] = ' ';}

	$to = "rem-ac@mail.ru";
	$subject = "СООБЩЕНИЕ С САЙТА REM-AC.RU";
	$headers = "From: REM-AC.RU <info@rem-ac.ru>\r\nContent-type: text/html; charset=utf-8 \r\n";

	$message = "<h2 class="first-title section-title"> Заказан расчёт стоимости!</h2> 
		<p>Имя - ".$_POST['name']."</p>
		<p>Телефон - ".$_POST['phone']."</p>
		<p>Email - ".$_POST['email']."</p>
		<p> <a href='".$flink."' target='_blank'>Параметры заказа</a></p>
	
	";
	mail ($to, $subject, $message, $headers);
	mail ($_POST['email'], $subject, $message, $headers);
	

?>

<?php

header("Content-type: application/json; charset=utf-8");

$domen=str_replace ('screenshot.php', '',$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); 
$domen = 'http://'.$domen;
if(isset($_POST["screenshot"]) && strlen($_POST["screenshot"]) > 0){
	
	//Сохранение картинки
    $data = str_replace("data:image/png;base64,", "", $_POST["screenshot"]);
	
    $png = fopen($fname, "w");
    fwrite($png, base64_decode($data));
    fclose($png);



	


	$print ="
	<div class='colorBlockOut'>
		<p class='orderTitle'>Ваша заявка отправлена!</p>
		<p>В ближайшее время, наши менеджеры свяжуться с Вами.</p>
		
	</div>
	";
	echo $print;

		
}

?>