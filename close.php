<?php

$msg = $_POST['msg'];
// $msg = ".";
$fp = fopen('data.txt', 'w');
fwrite($fp, "msg $msg");
fclose($fp);