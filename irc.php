<?php

// error_reporting(0);

if(empty($_POST['user']) or empty($_POST['chan']))
{
	$_POST['user'] = "yuriholic";
	$_POST['chan'] = "#ptiik";
}
// 


// function writeIRC($msg){
	// define your variables
	// $msg = "this is spartaaa";
	$host = "chat.freenode.net";
	$port = 6667;
	$nick= $_POST['user'];
	$ident= $_POST['user'];
	// $ident="yurinormal";
	$chan= $_POST['chan'];
	$readbuffer="";
	$realname = "Demo Tester";
	$debug = false;
	
	if(file_exists('log.txt'))
	{
		unlink('log.txt');
	}

	// echo "here";
	// open a socket connection to the IRC server
	$fp = fsockopen($host, $port, $erno, $errstr, 30);

	// print the error if ther eis no connection
	if (!$fp) {
		echo $errstr." (".$errno.")<br />\n";
		header("Location: index.php");
	} else {
		// write data through the socket to join the channel
		fwrite($fp, "NICK ".$nick."\r\n");
		fwrite($fp, "USER ".$ident." ".$host." bla :".$realname."\r\n");
		fwrite($fp, "JOIN :".$chan."\r\n");
		
		// write data through the socket to print text to the channel
		// fwrite($fp, "PRIVMSG ".$chan." :$msg\r\n");
		// fwrite($fp, "LUSERS ".$chan."\r\n");
		
		// $timep = 0; //set up timer
		// $timep = round(microtime(), 3); //start microtime
		// loop through each line to look for ping
		$i = 1;

		while(!feof($fp))
		{
			// echo $i++;
			//
			// try {
				
			// } catch (Exception $e) {
				
			// }
			// echo "tes";
			// for($i=0;$i<=1;$i++)
			
			// {
			// fwrite($fp, "PING : ".$host."\n\r");
			// $response = fgets($fp, 1024);
			// if($response)
			// {
			 
			$response = fgets($fp, 1024);
			echo $response;
			// sleep(1);

			$responsehandle = fopen('log.txt', 'a+');
			fwrite($responsehandle, $response."<8>");
			fclose($responsehandle);



			// }
			// echo $response;
			
			// sleep(1);
			// }

			// fwrite($fp, "PRIVMSG ".$chan." : \r\n");
			// sleep(1);
			// echo $response = stream_get_contents($fp, 1024);


			// if(substr($response, 0, 6) == "PING :") 
   //          { 
   //              fwrite($fp, "PONG :".substr($response, 6)."\n\r");
   //              echo "pong"; 
   //          }

            $handle = fopen('data.txt', "r");
			$contents = fread($handle, 1024);

			// echo $contents;
			// sleep(1);

			if($handle)
			{
				$mess = explode(" ", $contents);
				if($mess[0]=="msg")
				{
					fwrite($fp, "PRIVMSG ".$chan." :".$mess[1]."\r\n");
					// getResponse($fp);
					echo $mess[1];

					$handlewrite = fopen('data.txt', 'w');
					fwrite($handlewrite, '.');
					fclose($handlewrite);
				}
				else if($mess[0]=="close")
				{
					$handlewrite = fopen('data.txt', 'w');
					fwrite($handlewrite, '.');

					fclose($handlewrite);
					fclose($handle);
					fclose($fp);
				}
			}
			fclose($handle);
		// 	
			// flush();
		}

		// while (!feof($fp)) {
		// 	// $_SESSION["tes"] = "final";
		// 	// $i++;
		// 	// echo $i;
		// 	// echo $_SESSION["tes"];
		// 	$response = fgets($fp, 1024);
		// 	echo $response;

		// 	$handle = fopen('data.txt', "r");
		// 	$contents = fread($handle, filesize('data.txt'));
		// 	if($handle)
		// 	{
		// 		$mess = explode(" ", $contents);
		// 		if($mess[0]=="msg")
		// 		{
		// 			fwrite($fp, "PRIVMSG ".$chan." :".$mess[1]."\r\n");
		// 			// echo $mess[1];
		// 		}
				
		// 	}

		// 	// fclose($handle);

		// 	if(substr($response, 0, 6) == "PING :") 
  //           { 
  //               fwrite($fp, "PONG :".substr($response, 6)."\n\r");
  //               echo "pong"; 
  //           }
		// 	flush();
		// }
		
		fclose($fp);
	}

   	function getResponse($conn)
	{
	    $data = "";
	    while($str = fgets($conn,4096))
	    {
	      $data .= $str;
	      if(substr($str,3,1) == " ") { break; }
	    }
	    if($debug) echo $data . "<br>";
	    return $data;
	}
?>

