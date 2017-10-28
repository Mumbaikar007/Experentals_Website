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
	
	<title>Rent an item</title>
	   <!-- Latest compiled and minified CSS -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	  <!-- jQuery library -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	  <!-- Latest compiled JavaScript -->
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

	  <!-- <link rel="stylesheet" type="text/css" href="css/header.css"> -->
	  <link rel="stylesheet" type="text/css" href="css/footer.css">
	  <link rel="stylesheet" type="text/css" href="css/custom.css">
	  <link rel="stylesheet" type="text/css" href="css/css.css">


	<!-- <meta http-equiv="Refresh" content="5">	 -->

	<!-- <script type="text/javascript">
		var auto_refresh = setInterval((function () {
		    $("#messagesDivision").load("includes/core.inc.php"); //Load the content into the div
		}), 1000);


	</script> -->

	<style type="text/css">
		
	.card {
	    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	    transition: 0.3s;
	    width: 40%;
	}

	.card:hover {
	    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
	}

	.container {
	    padding: 2px 16px;
	}
	



	</style>



</head>
<body>
		

    <!-- =========================HEADER==================================== -->
  <header >
    
    <!--  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">Experentals</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
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
    </nav> -->


    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">ExpeRentals</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../finalindex.html">Home</a></li>
            <li><a href="../RentandLess/searchAnItem.php">Search An Item</a></li>
            <li><a href="../RentandLess/putAd.php">Rent An Item</a></li>
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
            
            <li><a href="#"></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">

            <li><a href="../ChatSystem/thechat.php">Chat</a></li>
            <li><a href="../login/login.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="../login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <!-- <li style="color: white;margin-top: 11px;">Search : <input type="text" name="search" value="Type a keyword" style="color: black;"> --> ';


            <?php


/*
            if ( isset($_SESSION['lllog']) ){
              
              echo '
              <li><a href="login/login.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="login/login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              <!-- <li style="color: white;margin-top: 11px;">Search : <input type="text" name="search" value="Type a keyword" style="color: black;"> --> ';
            }

            else {
              echo '
              
              <li><a href="login/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
              <!-- <li style="color: white;margin-top: 11px;">Search : <input type="text" name="search" value="Type a keyword" style="color: black;"> --> ';
            }
*/
            ?>

          </ul>
        </div>
      </div>
    </nav>


  </header>
  <!-- ================================HEADER ENDS============================ -->


	<!-- ====================== FORM ======================== -->

	<div style="font-size: 40px;text-align: center;">
		
		Rent an Item


	</div>



	<div style="margin-top: 50px;">

	<div class="card" style="padding: 30px 40px 20px 40px;max-width: 500px;margin: auto; min-width: 300px;	background-color: white;">
	<form id="form_input" action="includes/send.php" method="POST">
		<table >
			<tr>
				<td> Object Title :</td> 
				<td> <input type="text" name="title" required></td>
			</tr>
			<tr>
				<td> Category : </td>
				<td> <input type="text" name="category" required></td>
			</tr>
			<tr>
				<td> Description :</td>
				<td> <textarea name="description" cols="30" rows="5" required></textarea></td>
			</tr>
			<tr>
				<td> Image :</td>
				<td> <input type="file" name="img" accept="image/*"> </td>
			</tr>
			<!-- Input another type of file here not an image, and see what happens @Pranav-->

			<tr>
				<td> Price ( Monthly ) :</td>
				<td> <input type="text" id="price" name="price" required=""></td>
			</tr>

			<tr>
				<td> Location :</td>
				<td> <input type="text" id="price" name="location" required=""> </td>
			</tr>
			
			<tr>	
				<td></td>
				<td><input type = "submit" name = "submit" class="btn btn-info">	</td>
			</tr>
		</table>
	</form>
	</div>
	</div>


	<!-- ================ FORM ENDS =============== -->

</body>
</html>
