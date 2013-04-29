<?php

$chathandle = fopen('chat_log.txt', "r");
	$chatcontents = fread($chathandle, filesize("chat_log.txt"));

	$chatresponse = explode("<8chat>", $chatcontents);

	foreach ($chatresponse as $key => $chatvalue) {
		# code...
		echo $chatvalue."<br>";
	}