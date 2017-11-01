<?php

	require ('includes/receive.php');
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
	
	<title>Search </title>

	 <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  <!-- <link rel="stylesheet" type="text/css" href="css/header.css"> -->
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">



	<!-- <meta http-equiv="Refresh" content="5">	 -->

	<!-- <script type="text/javascript">
		var auto_refresh = setInterval((function () {
		    $("#messagesDivision").load("includes/core.inc.php"); //Load the content into the div
		}), 1000);


	</script> -->

	<style type="text/css">
		
		.product_view .modal-dialog{max-width: 800px; width: 100%;}
        .pre-cost{text-decoration: line-through; color: #a5a5a5;}
        .space-ten{padding: 10px 0;}


        .affix {
		      top: 0;
		      width: 100%;
		      z-index: 9999 !important;
		  }

		  .affix + .container-fluid {
		      padding-top: 70px;
		  }

	</style>


	<script type="text/javascript">
		

		function validateForm() {
		   
		    var itemName = document.getElementById("name");
		    var itemCategory = document.getElementById("category");
		    
		    if ( itemName.value == "" ) {
		        alert("Name cannot be empty !!");
				itemName.focus();	
		        return false;
		    }

		    if ( itemCategory.value == "" ) {
		        alert("Name cannot be empty !!");
				itemCategory.focus();	
		        return false;
		    }
		}



	</script>


</head>
<body >
		
		
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



            if  (empty($_SESSION['sess_user'])){
              
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



	  <!-- ============================ SEARCH BAR STARTS ========================= -->

	    <div class="container-fluid" style="background-image: url('images/background.jpg'); text-align: center;margin-top: -20px; min-height: 150px;">
		  <h1 style="font-family: Arial, Helvetica, sans-serif;margin-top: 50px;color: white;
          text-shadow: 2px 2px 4px #000000;font-size: 50px;">Search An Item</h1>
		</div>

		<nav class="navbar navbar-default" data-spy="affix" data-offset-top="190">
		 	<div class="container">
		 			
		 		<div class="row" style="margin-top: 10px;">
		 			
		 			<div class="col-lg-4 col-xs-12">
		 				Name:
		 			</div>

		 			<div class="col-lg-4 col-xs-12">
		 				Category:
		 			</div>

		 			<div class="col-lg-4 col-xs-12">
		 				Location:
		 			</div>

		 		</div>

		 	</div> 
		</nav>





	  <!-- =============== SEARCH BAR ENDS ====================== -->


</body>
</html>
