<!--Код для добовления-->
<?php
if (isset($_REQUEST['ok'])) {
 
    $string = '<div class="otzyv">
					<div>
						<div>
							<div>
							<img style="width: 100px;
    height: 90px;
    border-radius: 50%;
    border: 5px solid #ddd;
    display: flex;
    justify-content: center;
    transition: .3s;" src="img/otz.jpg" alt="">
							</div>
							<div style="margin-left: 120px;
    margin-top: -110px;">'.'<h5 style="margin-top: 30px;">'.$_REQUEST['username'].'</h5>'.'<br>'.'<div class="opis-otzyv w-100">'.$_REQUEST['msg']
							.'</div>
							</div>				
<div style="width:80%;
border-top:3px solid #9EC1D4;
margin-top: 30px;
border-bottom: dotted 3px #9EC1D4;
padding-left:10px">
<font color="red"><strong><p>Администратор</strong></font> - <font size="3">Спасибо Вам за отзыв</font></p>
</div>
						</div>
					</div>
				</div><br><br><br>';
    file_put_contents('comment.txt', $string, FILE_APPEND);
    header( "Location: /otzyvy.php" );
    exit();
}
?>
<!--Код для добовления-->

<!--Код для удаления-->
<?php
if (isset($_REQUEST['del'])) {

    $myFile = "comment.txt";
    $fh = fopen($myFile, 'w');
    fclose($fh);
}
?>
<!--Код для удаления-->

<html>
    <head>
        <title>Добавить</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
<!--форма-->
<div align="center">
<form action="" method="post">
<input type="email" id="datin" name="username" placeholder="Ваш Email" size="20" required><br>
<br><textarea type="text" id="comin" name="msg" rows="5" cols="25" placeholder="Написать комментарий"></textarea>
<br><br>
<input class="comment" type="submit" name="ok" value="Написать" >
</form>
</div>
<a href='/otzivy.php'>Передумал(а) - назад</a>
<!--форма-->
</body>
</html>


















































































































if (isset($_REQUEST['okay'])) {
 
    $string = '<div class="otzyv">
					<div>
						<div>
							<div>
							<img style="width: 100px;
    height: 90px;
    border-radius: 50%;
    border: 5px solid #ddd;
    display: flex;
    justify-content: center;
    transition: .3s;" src="img/otz.jpg" alt="">
							</div>
							<div style="margin-left: 120px;
    margin-top: -110px;">'.'<h5 style="margin-top: 30px;">'.$_REQUEST['username'].'</h5>'.'<br>'.'<div class="opis-otzyv w-100">'.$_REQUEST['msg']
							.'</div>
							</div>				
<div style="width:80%;
border-top:3px solid #9EC1D4;
margin-top: 30px;
border-bottom: dotted 3px #9EC1D4;
padding-left:10px">
<font color="red"><strong><p>Администратор</strong></font> - <font size="3">Спасибо Вам за отзыв</font></p>
</div>
						</div>
					</div>
				</div><br><br><br>';
    file_put_contents('index1.php', $string, FILE_APPEND);
    header( "Location: /otzyvy.php" );
    exit();
}
?>


<?php
if (isset($_REQUEST['dell'])) {

    $myFile = "index.php";
    $fh = fopen($myFile, 'w');
    fclose($fh);
header('Refresh: 3; URL=/'); echo 'Через 3 сек. вы будете перенаправлены на новую страницу.'; 
exit();
}
?>
