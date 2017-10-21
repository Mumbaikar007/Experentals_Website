 <?php
 	
 	session_start();

 	require ('includes/core.inc.php');
	//echo "index.php";


 	//If Chatting for first time
 	if (!isset($_SESSION['sess_user']))
 		header("Location: ../login/login.html");  
 	
 	if (isset($_SESSION['talkto']) ){
 		echo $_SESSION['talkto'];
 	//function addToChatList( ){
	    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
	    mysqli_select_db($con, 'escrow') or die("cannot select DB");  
	    
	    $query=mysqli_query($con ,"SELECT other FROM chatTo WHERE name='".$_SESSION['sess_user']."'"); 
	    //$query2=mysqli_query($con ,"SELECT other FROM chatTo WHERE name='".$_SESSION['talkto']."'");
	    
	    $row =  (mysqli_fetch_assoc($query));
	    //$row2 =  (mysqli_fetch_assoc($query2));
	    

	    $array = unserialize($row['other']);
	    //$array2 = unserialize($row2['other']);

	    //echo $array."<br>";
	    $neverTalked = 1;
	    foreach ($array as $i) {
	    	echo $i;
	    	if ( $i == $_SESSION['talkto']){	
	    		echo " - never";
	    		$neverTalked = 0;

	    	}
	    }	
	    //echo $_SESSION['talkto']. " " . $_SESSION['sess_user'] . "<br>";
	    if ($neverTalked == 1){
	    	$array += array($_SESSION['talkto']);
	    	//$array2 += array($_SESSION['sess_user']);
	    }

	    $array = serialize($array);
	    //$array2 = serialize($array2);

	    $query=mysqli_query($con ,"UPDATE chatTo SET other='".$array."' WHERE name='".$_SESSION['sess_user']."'");
	    //$query=mysqli_query($con ,"UPDATE chatTo SET other='".$array2."' WHERE name='".$_SESSION['talkto']."'");

	    /*if ($query){
	        echo "done";
	    }
	    else{
	        echo "ABE yaar";
	    }*/
	}
    // ends



	
	if(isset($_POST['send'])) {
		if (send_msg( $_SESSION['sess_user'], $_SESSION['talkto'], $_POST['message'] ) )
		{
			echo 'Message Sent';

		}
		else{
			echo 'Message failed';
		}
	}
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
		
		
	<nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Page 1-1</a></li>
                <li><a href="#">Page 1-2</a></li>
                <li><a href="#">Page 1-3</a></li>
              </ul>
            </li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- =================== HEADER ENDS ======================== -->

		
		  <div class="panel panel-info" style=" position: fixed;bottom: 2px; right: 5px; width: 300px;">
		    <div class="panel-heading">Chat</div>
		    <div id = "sdown" class="panel-body" style="height: 200px;overflow: auto;scroll: ">
		    	
		    	<?php

					$messages =  get_msg();

				/*	echo gettype($messages);*/

					foreach($messages as $message){

						if ($message['sender'] == $_SESSION['sess_user'] || $message['receiver'] == $_SESSION['sess_user'] ){
							/*echo '<strong>'.$message['sender'].': <br></strong>';
							echo $message['message'].'<br><br>';
							*/

							//echo $message['sender'] == $_SESSION['sess_user'] ; 

							/*echo var_dump($message['sender']) . " " , var_dump($_SESSION['talkto']). " ". var_dump($_SESSION['sess_user']). " <br> ";*/

							if ( !strcmp( $message['sender'],  $_SESSION['talkto']) ){

								echo '<strong>'.$message['sender'].': <br></strong>';
								echo $message['message'].'<br><br>';
							}
							else if ( !strcmp( $message['sender'], $_SESSION['sess_user']) ){
								echo '<strong>'.$message['sender'].': <br></strong>';
								echo $message['message'].'<br><br>';
							}
						}
					}
					
				?>


		    </div>



		    <div class="panel-footer">

		    	<form action="index.php" method = "post" > 
				
				<center>
					<!-- <div class = "" style=""><label><input type="text" name="sender" placeholder="Name"></label></div> -->
					<div class = ""><label><input type="text" name="message" placeholder="Enter Message"></label></div>
					
				<input type="submit" name="send" value="Send Message">
				</center>
			
			</form>

		    </div>
		  </div>
		</div>

		

		<br>

		

	

</body>
</html>
