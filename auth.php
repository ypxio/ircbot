<?php
// session_start();

@require_once('recaptchalib.php');
$publickey = "6LeIvdoSAAAAAM2fc9m2Ol3jW-THXfUibACwN94N";
$privatekey = "6LeIvdoSAAAAANJ5nM6jMb3kOZ4i6X-WX1qNOrro";
 
$resp = null;
$error = null;
 
# are we submitting the page?
$resp = recaptcha_check_answer ($privatekey,
                              $_SERVER["REMOTE_ADDR"],
                              $_POST["recaptcha_challenge_field"],
                              $_POST["recaptcha_response_field"]);

if ($resp->is_valid) {

	// echo "capca sukses";
	// $_SESSION['username'] = $_POST['username'];
	// $_SESSION['channel'] = $_POST['channel'];

	include("home.php");
	// include("irc.php");
	// exec("php irc.php");


} else {
 	header("Location: index.php");
}

// echo "<pre>";
//   print_r($_POST);