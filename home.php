<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery-1.5.2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>

<!-- <a id="tes">click</a> -->

<script type="text/javascript">
$(document).ready(function() {

	var request = $.ajax({
	    url: "irc.php",
	    type: "post",
	    data: "user=<?php echo $_POST['username'] ?> & chan=<?php echo $_POST['channel'] ?>",
	    beforeSend: function(response) {

            // $("#user_list").html("response");
            setInterval(function() {
		      $("#daemon").load('tesajax.php');
		   	}, 1000);

		   	setInterval(function() {
		      $(".user").load('user_read.php');
		   	}, 1000);

		   	setInterval(function() {
		      $("#chat").load('chat_read.php');
		   	}, 1000);

            $.ajaxSetup({ cache: false });
        },
	    success: function(response){

	    	// alert("data loaded");
	    	// $("#result").html(response);
		   	// var refreshId = setInterval(function() {
		    //   $("#result").html(response);
		   	// }, 1000);
	    }
	});

	$("#close").click(function(){

		var msg = "close";

		$.ajax({
		    url: "sendtes.php",
		    type: "post",
		    data: "msg="+ msg,
		    success: function(response){
		    	alert("logout!");
		    	document.location.href="index.php";
		    }
		});

	});
   	
});


</script>

<div id="header">
	<ul>
		<li>PTIIKIRC</li>
		<li><a id="daemon_t">STATUS</a></li>
		<li><a id="chat_t">CHAT</a></li>
		<li><a id="close">CLOSE</a></li>
	</ul>
</div>

<div class="result">
	<div id="daemon">
		daemon
	</div>
	<div id="chat">
		chat
	</div>
<!-- response muncul disini -->
</div>

<script type="text/javascript">
$("div#chat").hide();
$("#daemon_t").click(function(){
	$("div#daemon").show();
	$("div#chat").hide();
});
$("#chat_t").click(function(){
	$("div#chat").show();
	$("div#daemon").hide();
});

</script>
<div id="user_list">
	<div class="user">
	</div>
</div>
<!-- <form> -->
<!-- <div class="container"> -->
<input type="text" name="msg" id="msg"/>

<script type="text/javascript">

$('#msg').keypress(function(e) {
        if(e.which == 13) {

        	var msg = $("#msg").val();
        	alert(msg);

			$.ajax({
				    url: "sendtes.php",
				    type: "post",
				    data: "msg="+ msg,
				    success: function(response){
				    	alert(response);
				    }
				});

            // alert("submit message");
        }
    });

</script>
<!-- </div> -->

<!-- </form> -->

</body>
</html>
