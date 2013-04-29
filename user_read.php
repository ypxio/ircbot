<?php


	$userhandle = fopen('user_list.txt', "r");
	$usercontents = fread($userhandle, filesize("user_list.txt"));

	$userresponse = explode("<8user>", $usercontents);

	foreach ($userresponse as $key => $uservalue) {
		# code...
		echo $uservalue."<br>";
	}
	
	