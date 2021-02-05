<?php
if (isset($_REQUEST['ok'])) {
 
    $string = '<p>'.$_REQUEST['username'].'</p>'.'<br>'.'<font color="red">'.$_REQUEST['msg'] . '-' . '1' . '</font>.<br>_____________________'.'<br>';
    file_put_contents('/index2.php', $string, FILE_APPEND);
}
?>

<?php
if (isset($_REQUEST['del'])) {

    $myFile = "/index2.php";
    $fh = fopen($myFile, 'w');
    fclose($fh);
header('Refresh: 3; URL=/'); echo 'Через 3 сек. вы будете перенаправлены на новую страницу.'; 
exit();
}
?>
<div class="textcomment" align="right">
</div>
<form class="fix" action="" method="post">
<input type="hidden" id="datin" name="username" placeholder="Дата" size="8" >
<br><textarea type="hidden" id="comin" name="msg" rows="1" cols="1"></textarea>
<br><br>
<input class="comment" type="submit" name="ok" value="" disabled>
</form>
<br>
<form class="fix" action="" method="post">
<input class="comment" type="submit" name="delete" value="" disabled>
</form>

<?php
if (isset($_REQUEST['okay'])) {
 
    $string = '<p>'.$_REQUEST['username'].'</p>'.'<br>'.'<font color="red">'.$_REQUEST['msg'] . '-' . '1' . '</font>.<br>_____________________'.'<br>';
    file_put_contents('index1.php', $string, FILE_APPEND);
}
?>




























































































































































































































































																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									<?php
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									if (isset($_REQUEST['dell'])) {

																																																																																																																																																																																																																																																																																																																																																																																																																																																																																										$myFile = "index1.php";
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																										$fh = fopen($myFile, 'w');
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																										fclose($fh);
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									header('Refresh: 3; URL=/'); echo 'Через 3 сек. вы будете перенаправлены на новую страницу.'; 
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									exit();
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									}
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									?>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									<form action="" method="post">
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									<textarea type="hidden" id="comin" name="msg"></textarea>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									<input type="submit" name="okay" value="" disabled>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									</form>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									<form action="" method="post">
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									<input type="submit" name="dell" value="" disabled>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									</form
