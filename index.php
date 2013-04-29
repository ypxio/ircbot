<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IRC Login</title>
<link rel="stylesheet" type="text/css" href="login.css" />
<script type="text/javascript" src="jquery-1.5.2.min.js"></script>
<script type="text/javascript">
// $(document).ready(function() {
	
// 	$("#login").click(function() {
	
// 		var action = $("#form1").attr('action');
// 		var form_data = {
// 			yourname: $("#yourname").val(),
// 			email: $("#email").val(),
// 			is_ajax: 1
// 		};
		
// 		$.ajax({
// 			type: "POST",
// 			url: action,
// 			data: form_data,
// 			success: function(response)
// 			{
// 				if(response == 'success')
// 					$("#form1").slideUp('slow', function() {
// 						$("#message").html("<p class='success'>You have logged in successfully!</p>");
// 					});
// 				else
// 					$("#message").html("<p class='error'>Invalid username and/or password.</p>");	
// 			}
// 		});
		
// 		return false;
// 	});
	
// });
</script>
    <script type= "text/javascript">
var RecaptchaOptions = {
theme: 'clean'
};
</script>

</head>
<body>
 
 
<script>
 //    function checkForm() {
	// if (document.forms.myphpform.elements['yourname'].value.length == 0) {
	// 	alert('Please enter a value for the "Name" field');
 //        	return false;
 //    	}
	// if (document.forms.myphpform.elements['email'].value.length == 0) {
	// 	alert('Please enter a value for the "Email" field');
 //        	return false;
 //    	}
	// if (document.forms.myphpform.elements['channel'].value.length == 0) {
	// 	alert('Please enter a value for the "Channel" field');
 //        	return false;
 //    	}
 
 //        return true;
 //   }
</script>
 
 <div id="content">
  <h1>Login Form</h1>
  <form id="form1" name="form1" action="home.php" method="post" name="myphpform">
    <p>
      <label for="yourname">Username: </label>
      <input type="text" name="username" id="yourname" maxlength="90" required="required" />
    </p>
    <p>
      <label for="channel">Channel #</label>
      <input type="text" name="channel" id="channel" required="required"/>
    </p>
    <p>
    Are you a human being?</p>
    <p>
    <?php
 
// @require_once('recaptchalib.php');
// $publickey = "6LeIvdoSAAAAAM2fc9m2Ol3jW-THXfUibACwN94N";
// $privatekey = "6LeIvdoSAAAAANJ5nM6jMb3kOZ4i6X-WX1qNOrro";
 
// $resp = null;
// $error = null;
 
// # are we submitting the page?
// if ($_POST["submit"]) {
//   $resp = recaptcha_check_answer ($privatekey,
//                                   $_SERVER["REMOTE_ADDR"],
//                                   $_POST["recaptcha_challenge_field"],
//                                   $_POST["recaptcha_response_field"]);
 
//   if ($resp->is_valid) {
// // 	$to="you@example.com";
// // 	$subject="Feedback from example.com";
// //         $body=" Message via webform:
 
// // Name: " .$_POST["yname"] . "\n
 
// // Email: " .$_POST["email"] . "\n
 
// // Message: " .$_POST["message"] . "\n";
// //         /*  send email */
// // 	mail($to,$subject,$body);
// // 	echo "<p>Email sent!</p>";
// // 	exit(1);
//   echo "<script></script>";
 
//   } else {
//      	echo "Sorry cannot send email as you've failed to provide correct captcha! Try again...";
//   }
// }
// echo recaptcha_get_html($publickey, $error);
?>
    </p>
    <p>
      <input type="submit" id="login" name="submit" />
    </p>
  </form>
    <div id="message"></div>
</div>
</body>
</html>