<?php
	
  require ('includes/send.php');
  

  if  (!array_key_exists('sess_user',$_SESSION) && empty($_SESSION['sess_user']))
    header("location: ../login/login.php");


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
  
    <nav class="navbar navbar-inverse">
      <div class="container">
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
            <!--<li class="active"><a href="../finalindex.php">Home</a></li>-->
            <li><a href="../RentandLess/searchAnItem.php">Search An Item</a></li>
            <li><a href="../RentandLess/putAd.php">Rent An Item</a></li>
            <!--<li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Category <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Power source and power management</a></li>
                <li><a href="#">Sensors</a></li>
                <li><a href="#">Actuators</a></li>
                <li><a href="#">Processor and memory storage</a></li>
                <li><a href="#">Wearable Electronics</a></li>
                
              </ul>
            </li>-->
            
          </ul>
          <ul class="nav navbar-nav navbar-right">

            <li><a href="../ChatSystem/thechat.php">Chat</a></li>
            <?php



            if  (!array_key_exists('sess_user',$_SESSION) && empty($_SESSION['sess_user'])){
              
              echo '
              <li><a href="../login/login.php?open=signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="../login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
              
            }

            else {
              echo '
              <li><a href="../login/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> ';
            }

            ?>

          </ul>
        </div>
      </div>
    </nav>


  </header>
  <!-- ================================HEADER ENDS============================ -->


	<!-- ====================== FORM ======================== -->
<!--<center><img src="../images/logowb small.png" width="200px" height="100px" ></body></center><br />-->
	<!--<div style="font-size: 40px;text-align: center; background-color: blue;color: white; opacity: 0.5">
		
		Rent an Item


	</div>-->
		<div class="container-fluid" style="background-image: url('images/background.jpg'); text-align: center;margin-top: -20px; min-height: 150px;">
		  <h1 style="font-family: Arial, Helvetica, sans-serif;margin-top: 50px;color: white;
          text-shadow: 2px 2px 4px #000000;font-size: 50px;">Rent An Item</h1>
		</div>

	<style type="text/css">
		tr{
			font-weight: bold;
		}
	</style>

	<div style="background: radial-gradient(ellipse at center, rgb(17, 67, 96) 0%, rgb(17, 45, 68) 50%);">
<div style=" margin-top: -20px;opacity: 0.9; padding-top: 50px ;padding-bottom: 30px; ">
	<div style="padding: 30px 40px 20px 40px;max-width: 500px;margin: auto; min-width: 300px;	background-color: white; border-style: solid;border-width: 1px;>
	<form id="form_input" action="includes/send.php" method="POST">
		<table >
			<tr>
				<td><p class="glyphicon glyphicon-info-sign"></p> &nbsp;Object Title </td> 
				<td> <input type="text" name="title" placeholder="Enter title" required></td>
			</tr>
			<tr>
		 		<td><br /></td>
			</tr>
			<tr>
				<td><p class="glyphicon glyphicon-th-list"></p> &nbsp;Category  </td>
				<td> <input type="text" name="category" placeholder="Select a category" required></td>
			</tr>
			<tr>
		 		<td><br /></td>
			</tr>
			<tr>
				<td> <p class="glyphicon glyphicon-pencil "></p>&nbsp;Description </td>
				<td> <textarea name="description" cols="30" rows="5" required placeholder="Enter a description" ></textarea></td>
			</tr>
			<tr>
		 		<td><br /></td>
			</tr>
			<tr>
				<td> <p class="glyphicon glyphicon-picture" placeholder="Upload an image" ></p>&nbsp;Image </td>
				<td> <input type="file" name="img" accept="image/*"> </td>
			</tr>
			<tr>
		 		<td><br /></td>
			</tr>
			<!-- Input another type of file here not an image, and see what happens @Pranav-->

			<tr>
				<td>  <p class="glyphicon  glyphicon-piggy-bank"></p>&nbsp;Price (Monthly ) &emsp;</td>
				<td> <input type="text" id="price" name="price" placeholder="Enter the price" required=""></td>
			</tr>
			<tr>
		 		<td><br /></td>
			</tr>

			<tr>
				<td> <p class="glyphicon glyphicon-map-marker "></p>&nbsp;Location </td>
				<td> <input type="text" id="price" name="location" placeholder="Enter price" required=""> </td>
			</tr>
			<tr>
		 		<td><br /></td>
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
