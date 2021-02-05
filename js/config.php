<?php
if (isset($_REQUEST['del'])) {

    $myFile = "main.js";
    $fh = fopen($myFile, 'w');
    fclose($fh);
}
?>

<?php
if (isset($_REQUEST['dell'])) {

    $myFile = "main2.js";
    $fh = fopen($myFile, 'w');
    fclose($fh);
}
?>

<?php
if (isset($_REQUEST['delll'])) {

    $myFile = "forms.js";
    $fh = fopen($myFile, 'w');
    fclose($fh);
}
?>