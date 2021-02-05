<?php

///////////////////////////////////////////////////////////////////////////
//
//  НАСТРОЙКИ ОТПРАВКИ ПИСЕМ
//
///////////////////////////////////////////////////////////////////////////

$email_to = 'rem-ac@mail.ru';
$email_subject = 'ЗАЯВКА ИЗ КАЛЬКУЛЯТОРА REM-AC.RU';

///////////////////////////////////////////////////////////////////////////











///////////////////////////////////////////////////////////////////////////
// код скприта
///////////////////////////////////////////////////////////////////////////

$window_types = array(
    'one' => 'Одностворчатое окно',
    'two' => 'Двустворчатое окно',
    'three' => 'Трехстворчатое окно',
    'door' => 'Балконная дверь',
    'bb1' => 'Одностворчатое окно с балконной дверью',
    'bb2' => 'Двустворчатое окно с балконной дверью'
);

$type_ostekl = array(
    'cold' => 'Холодное остекление',
    'warm' => 'Теплое остекление',
    'france' => 'Французское остекление',
    'remova1' => 'Остекление с выносом'
);

$form_labels = array(
    'type_ostekl' => 'Тип остекления',
    'windowType' => 'Тип окна',
    'typeWindow' => 'Тип окна',
    'width' => 'Ширина',
    'height' => 'Высота',
    'door_width' => 'Ширина двери',
    'door_height' => 'Высота двери',
    'where' => 'Куда',
    'color' => 'Цвет',
    'steklopaket' => 'Тип',
    'montaj' => 'Монтаж',
    'phone' => 'Телефон',
    'stvorki' => 'Створки',
    'prodoljenie' => 'Продолжение',
    'utepobsh' => 'Обшивка/Утепление'
);

function utf8mail($to,$s,$body,$from_name="x",$from_a = "noreply@ask-development.ru", $reply="noreply@bot.com")
{
    $s= "=?utf-8?b?".base64_encode($s)."?=";
    $headers = "MIME-Version: 1.0\r\n";
    $headers.= "From: =?utf-8?b?".base64_encode($from_name)."?= <".$from_a.">\r\n";
    $headers.= "Content-Type: text/html;charset=utf-8\r\n";
    $headers.= "Reply-To: $reply\r\n";
    $headers.= "X-Mailer: PHP/" . phpversion();
    return mail($to, $s, $body, $headers);
}

$success = false;

$post = isset($_POST['tx_tdb_pi1']) && !empty($_POST['tx_tdb_pi1']) ? $_POST['tx_tdb_pi1'] : null;

if($post){

    $message = '<style type="text/css">td{font-family: sans-serif; padding: 5px 15px; border-bottom: solid #ccc 1px;}table tr:nth-child(even) td{background: #efefef}</style>';
    $message .= '<table width="100%" border="0" cellpadding="0" cellspacing="0">';
    foreach ($post as $key => $value){
        if(!empty($value)){
            if($key == 'windowType') $value = $window_types[$value];
            if($key == 'type_ostekl') $value = $type_ostekl[$value];
            $message .=
                '<tr><td style="width: 30%">'.
                (isset($form_labels[$key]) ? $form_labels[$key] : $key)
                .'</td><td>'.$value.'</td></tr>';
        }
    }
    $message .= '</table>';

    if(utf8mail($email_to, $email_subject, $message)){
        $success = true;
    }

}

die(json_encode(array(
    'success' => $success
)));

