	<?php
	
  //require ('includes/send.php');
  session_start();

  if  (empty($_SESSION['sess_user']))
    header("location: ../login/login.php");


?>


<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Place a bid</title>
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
	    box-shadow: 0 4px 8px 0 white;
	    color: white;
	    transition: 0.3s;
	    width: 40%;
	}

	.card:hover {
	    box-shadow: 0 8px 16px 0 white;
	}

	.container {
	    padding: 2px 16px;
	}
	

	.center {
    margin: auto;
    width: 50%;
    
    padding: 10px;
}



	</style>



</head>
<body style="background: radial-gradient(ellipse at center, rgb(17, 67, 96) 0%, rgb(17, 45, 68) 50%);">
		

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
            <li class="active"><a href="../finalindex.php">Home</a></li>
            <li><a href="../RentandLess/searchAnItem.php">Search An Item</a></li>
            <li><a href="../RentandLess/putAd.php">Rent An Item</a></li>
            <li><a href="../RentandLess/details.php">Details</a></li>
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

	<style type="text/css">
		tr{
			font-weight: bold;
		}
	</style>


	<div class="card center" style="margin-top: 100px;padding: 20px 10px 40px 10px">
	<form id="form_input" action="send_bid2.php" method="POST">
		<table class="center" >
			
			<tr>
		 		<td><br /></td>
			</tr>
			


			<tr>
				<td>  <p class="glyphicon  glyphicon-piggy-bank"></p>&nbsp;Renter Name &emsp;</td>
				<?php
				echo '
				<td> <input type="text" id="price" name="renter_name" value= "'.$_GET['rentername'].'" style = "color: black;"></td>';
				?>
			</tr>

			<tr>
		 		<td><br /></td>
			</tr>

			<tr>
				<td>  <p class="glyphicon  glyphicon-piggy-bank"></p>&nbsp;Item Name &emsp;</td>
				<?php
				echo '
				<td> <input type="text" id="price" name="item_name"  value="'.$_GET['itemname'].'" style = "color: black;" ></td>';
				?>
			</tr>

			<tr>
		 		<td><br /></td>
			</tr>
			
			<tr>
				<td><p class="glyphicon glyphicon-info-sign" ></p> &nbsp;Price</td> 
				<td> <input type="text" name="price" placeholder="Enter Bid value" style = "color: black;" required></td>
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
	</div>


	<!-- ================ FORM ENDS =============== -->

</body>
</html>
