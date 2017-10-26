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
		

	<!-- =========================HEADER==================================== -->
  <header >
    
    

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="../finalindex.php">ExpeRentals</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../finalindex.php">Home</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Category <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Power source and power management</a></li>
                <li><a href="#">Sensors</a></li>
                <li><a href="#">Actuators</a></li>
                <li><a href="#">Processor and memory storage</a></li>
                <li><a href="#">Wearable Electronics</a></li>
                
              </ul>
            </li>
            <li><a href="../RentandLess/searchAnItem.php">Search An Item</a></li>
            <li><a href="#"></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">

            <li><a href="../login/login.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="../login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              <!-- <li style="color: white;margin-top: 11px;">Search : <input type="text" name="search" value="Type a keyword" style="color: black;"> --> ';

          </ul>
        </div>
      </div>
    </nav>


  </header>
  <!-- ================================HEADER ENDS============================ -->


		
		
		    <form action="includes/send.php" method = "post" > 
				
				
				<input type="text" name="sender" placeholder="Name">
				<input type="text" name="message" placeholder="Enter Message" >
				
				<input type="submit" name="send" value="Send Message">
				</center>
			
			</form>


</body>
</html>
