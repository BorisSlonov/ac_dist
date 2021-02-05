<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['level1'])) {
        $level1 = "Вид дома: <b>". $_POST['level1'] ."</b><br>";
    }
    if (!empty($_POST['level2'])) {
        $level2 = "Комнат в вашей квартире: <b>". $_POST['level2'] ."</b><br>";
    }
    if (!empty($_POST['level3'])) {
        $level3 = "Площадь помещения: <b>". $_POST['level3'] ."</b><br>";
    }
    if (!empty($_POST['level4'])) {
        $level4 = "Стиль ремонта: <b>". $_POST['level4'] ."</b><br>";
    }
    if (!empty($_POST['level5'])) {
        $level5 = "Есть ли у вас дизайн проект: <b>". $_POST['level5'] ."</b><br>";
    }
    if (!empty($_POST['level6'])) {
        $level6 = "Основной материал для полов: <b>". $_POST['level6'] ."</b><br>";
    }
	 if (!empty($_POST['level8'])) {
        $level6 = "Материалы какой ценовой категории включать в расчёт?: <b>". $_POST['level8'] ."</b><br>";
    }
	 if (!empty($_POST['name'])) {
        $name = "E-mail: <b>". $_POST['name'] ."</b><br>";
    }
    if (!empty($_POST['phone'])) {
        $phone = "Телефон: <b>". $_POST['phone'] ."</b><br>";
    }
    if (!empty($_POST['formData'])) {
        $formData = "Название формы: <b>". $_POST['formData'] ."</b><br>";
    }


    $to = "ac-rem@mail.ru";
    $sendfrom   = "info@rem-ac.ru";
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $subject = "ЗАЯВКА С САЙТА";
    $message = "<!DOCTYPE html>
<html lang=\"ru\">
<head>
<title>Новая заявка с сайта</title>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width\">
<style type=\"text/css\">
    #outlook a{padding:0;}.ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}  body, table, td, a{-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;}table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;}img{-ms-interpolation-mode:bicubic;}body{margin:0; padding:0;}img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}table{border-collapse:collapse !important;}  body{height:100% !important; margin:0; padding:0; width:100% !important;}.appleBody a {color:#68440a; text-decoration: none;}.appleFooter a {color:#999999; text-decoration: none;}  @media screen and (max-width: 525px) {  table[class=\"wrapper\"]{width:100% !important;}  td[class=\"logo\"]{text-align: left;padding: 20px 0 20px 0 !important;}  td[class=\"logo\"] img{margin:0 auto!important;}  td[class=\"mobile-hide\"]{display:none;}  img[class=\"mobile-hide\"]{display: none !important;}  img[class=\"img-max\"]{max-width: 100% !important;height:auto !important;}  table[class=\"responsive-table\"]{width:100%!important;}  td[class=\"padding\"]{padding: 10px 5% 15px 5% !important;}  td[class=\"padding-copy\"]{padding: 10px 5% 10px 5% !important;text-align: center;}  td[class=\"padding-meta\"]{padding: 30px 5% 0px 5% !important;text-align: center;}  td[class=\"no-pad\"]{padding: 0 0 20px 0 !important;}  td[class=\"no-padding\"]{padding: 0 !important;}  td[class=\"section-padding\"]{padding: 50px 15px 50px 15px !important;}  td[class=\"section-padding-bottom-image\"]{padding: 50px 15px 0 15px !important;}  td[class=\"mobile-wrapper\"]{padding: 10px 5% 15px 5% !important;}  table[class=\"mobile-button-container\"]{margin:0 auto;width:100% !important;}  a[class=\"mobile-button\"]{width:80% !important;padding: 15px !important;border: 0 !important;font-size: 16px !important;}  }
</style>
</head>
<body style=\"margin: 0; padding: 0;\">

<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
    <tr>
        <td bgcolor=\"#ffffff\" align=\"center\" style=\"padding: 70px 15px 70px 15px;\" class=\"section-padding\">
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"500\" class=\"responsive-table\">
                <tr>
                    <td>
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                            <tr>
                                <td>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                        <tbody>
                                             <tr>
                                                  <td class=\"padding-copy\">
                                                      <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                          <tr>
                                                              <td>
                                                                  <img src=\"https://landistore.com/resource/email/responsive-email.jpg\" width=\"500\" height=\"200\" border=\"0\" alt=\"Новая заявка с сайта\" style=\"display: block; padding: 0; color: #666666; text-decoration: none; font-family: Helvetica, arial, sans-serif; font-size: 16px; width: 500px; height: 200px;\" class=\"img-max\">
                                                              </td>
                                                            </tr>
                                                        </table>
                                                  </td>
                                              </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                        <tr>
                                            <td align=\"center\" style=\"font-size: 25px; font-family: Helvetica, Arial, sans-serif; color: #333333; padding-top: 30px;\" class=\"padding-copy\">Новая заявка с сайта</td>
                                        </tr>
                                        <tr>
                                            <td align=\"center\" style=\"padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;\" class=\"padding-copy\">
                                                Поздравляем, только что кто-то оставил заявку на вашем сайте.<br><br>
                                                $formData
                                                $level1
                                                $level2
                                                $level3
                                                $level4
                                                $level5
                                                $level6
                                                $name
                                                $phone
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>";
    $send = mail ($to, $subject, $message, $headers);
    if ($send == 'true')
    {

    }
    else
    {
        echo '<center>
 
<b>Ошибка. Сообщение не отправлено!</b>
 
</center>';
    }
} else {
    http_response_code(403);
    echo "Попробуйте еще раз";
}?>