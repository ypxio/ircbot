<?php
if(file_exists('log.txt'))
	{
		unlink('log.txt');
	}
for($i=0;$i<20;$i++)
{
	// echo $i."<br>";
	$responsehandle = fopen('log.txt', 'a+');
	fwrite($responsehandle, $i.$_POST['chan']);
	fclose($responsehandle);
	sleep(1);
}

// echo "ww";