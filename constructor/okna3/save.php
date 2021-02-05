
<?php

$domen=str_replace ('save.php', '',$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); 
$domen = 'http://'.$domen;

$fname="output/".time().".png";
$flink=$domen.$fname;


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

	echo $flink;

		
}

?>