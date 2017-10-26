<!DOCTYPE html>
<html>
<head>
	<title>Purchase</title>

		 <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  <!-- <link rel="stylesheet" type="text/css" href="css/header.css"> -->
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">


  <style type="text/css">


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
            <li class="active"><a href="../../finalindex.html">Home</a></li>
            <li><a href="../../RentandLess/searchAnItem.php">Search An Item</a></li>
            <li><a href="../../RentandLess/putAd.php">Rent An Item</a></li>
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

            <li><a href="../../ChatSystem/thechat.php">Chat</a></li>
            <li><a href="../../login/login.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="../../login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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

  <div class="container-fluid" style="text-align: center;margin-top: 100px;">
  	


  	<?php  

        session_start();
        $_SESSION['talkto'] = $_GET['RName'];
  	   	
      echo '
  		<div class = "col-lg-4"></div>
  		<div class ="col-lg-4" style="text-align:center;">
			<div class="card__one">
	      <div class="thumbnail">
	        <img src="http://tech.firstpost.com/wp-content/uploads/2014/09/Apple_iPhone6_Reuters.jpg" alt="" class="img-responsive">
	        <div class="caption">
	          <h4 class="pull-right">&#8377;' . $_GET['price']. '</h4>
	          <h4 class = "pull-left"><a href="#">' . $_GET['title']. '</a></h4>
	          <p style="clear:both;">'. $_GET['Description']. '</p>
	        </div>
	        <div class="ratings">
	          <p style = "text-align: center;"><b>'. $_GET['RName'] .' 
	            from '. $_GET['location'] .'
	          </b></p>
	        </div>
	        <div class="space-ten"></div>
	      
          <div>
            <a href="../../ChatSystem/thechat.php?talkto='.$_GET['RName'].'&login='.$_SESSION['sess_user'].'">
            <button type="button" class="btn btn-primary btn-block">Chat with '. $_GET['RName'].'</button>
            </a>
          </div>

          <br>
          <div class="space-ten"></div>

        </div>
	      </div>
		  

	    </div>
		<div class = "col-lg-4"></div>';



  	?>

  </div>





</body>
</html>