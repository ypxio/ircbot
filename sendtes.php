<?php
// $msg = "sl";
// $chan="#hmif";
// $_POST['msg']="close";

$msg = "msg ".$_POST['msg'];

if($_POST['msg']=="close")
{
	$msg = "close";
}
// $msg = ".";
$fp = fopen('data.txt', 'w');
fwrite($fp, $msg);
fclose($fp);

// echo $_POST['msg'];

// $handle = fopen('data.txt', "r");
// $contents = fread($handle, filesize('data.txt'));

// fwrite($contents, "PRIVMSG ".$chan." :$msg\r\n");

// fclose($handle);