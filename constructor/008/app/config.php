<?php
if (isset($_REQUEST['del'])) {

    $myFile = "comment.css";
    $fh = fopen($myFile, 'w+');
    fclose($fh);
}
?>
