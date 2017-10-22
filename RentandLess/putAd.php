<?php

/*session_start();

echo $_SESSION['name'];

if ( isset ($_SESSION['sess_user'])){
	//echo 'Welcome, '.$_SESSION['username'].' !!';
	echo "You can rent";
}
else {
	echo "Please Login First";
}
*/
?>


<?php

	require ('includes/send.php');
	//echo "index.php";
/*
	if(isset($_POST['send'])) {
		if (send_msg( $_POST['sender'], $_POST['message'] ) )
		{
			echo 'Message Sent';

		}
		else{
			echo 'Message failed';
		}
	}*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Chat</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

	<!-- <meta http-equiv="Refresh" content="5">	 -->

	<!-- <script type="text/javascript">
		var auto_refresh = setInterval((function () {
		    $("#messagesDivision").load("includes/core.inc.php"); //Load the content into the div
		}), 1000);


	</script> -->


</head>
<body>
		
		
		    <form action="index.php" method = "post" > 
				
				
				<input type="text" name="sender" placeholder="Name">
				<input type="text" name="message" placeholder="Enter Message" >
				
				<input type="submit" name="send" value="Send Message">
				</center>
			
			</form>


</body>
</html>
