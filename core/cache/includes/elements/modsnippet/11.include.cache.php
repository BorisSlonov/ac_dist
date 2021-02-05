<?php
$file_path = MODX_BASE_PATH.$input;
if(file_exists($file_path)){
    return $input."?".md5_file($file_path);
}else{
    // Если не нашли файл у себя, может быть передана ссылка на внешний файл
    $external_file = file_get_contents($input);
    if($external_file){
        // Проверяем, есть ли уже GET-параметры в запросе к файлу
        if(strpos($input, "?") !== false){
            return $input."&fileCashFix=".md5($external_file);
        }else{
            return $input."?fileCashFix=".md5($external_file);
        }
    }else{
        return $input;
    }
}
return;
