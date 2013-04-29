<?php

$handle = fopen('log.txt', "r");
$contents = fread($handle, filesize("log.txt"));

$response = explode("<8>", $contents);
$motd = false;
$i = 0;


foreach ($response as $key => $value) {
	echo $value."<br>";

	if(strpos($value, "353"))
	{
		//hubbard.freenode.net 353 yurinormal @ #ptiik :yurinormal @aldimaho
		$user_list = explode(":", $value);
		$user = explode(" ", $user_list[2]);

		if(file_exists("user_list.txt"))
		{
			unlink("user_list.txt");
		}

		foreach ($user as $key => $each_user) {
			// mekanisme penyimpanan user ke file
			// echo $each_user;
			$userhandle = fopen('user_list.txt', 'a+');
			fwrite($userhandle, $each_user."<8user>");
			fclose($userhandle);
		}
	}

	

	if(strpos($value, "376"))
	{
		$motd = true;
	}
		
	if(strpos($value, "PRIVMSG") and $motd == true)
	{
		
		echo $value;
		$user_chat = explode("!", $value);
		$msg_chat = explode(":", $value);

		echo $user = $user_chat[0];
		echo $msg = $msg_chat[2];

		$chathandle = fopen('chat_log.txt', 'a+');
		fwrite($chathandle, "asd".$i++);
		fclose($chathandle);

		// $motd=false;
	}
}