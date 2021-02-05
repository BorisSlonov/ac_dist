<?php
if (isset($_REQUEST['del'])) {

    $myFile = "custom.css";
    $fh = fopen($myFile, 'w');
    fclose($fh);
}
?>