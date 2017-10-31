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
	  <center><img src="../images/logowb small.png" width="200px" height="100px" ></body></center><br />
	  <div style="font-size: 40px;text-align: center; background-color: blue;color: white; opacity: 0.5">
		
		Search for an Item

	</div>

	 	
	 		<div style="margin-top: 50px; opacity: 0.8 ">
	 		<div class="card" style="padding: 30px 40px 20px 40px;max-width: 500px;margin: auto; min-width: 300px;	background-color: white; border-style: solid;border-width: 1px;">
	 			
	 			<form action="searchAnItem.php" method = "POST" onsubmit="return validateForm()">
	 		
	 				<!--center><img src="logo.png"></center>-->
	 				
	 				<table align="center" style="font-size: 20px">
		 				<!--<div class="col-lg-4 col-xs-12">-->
		 					

		 					<tr>
		 						<td><p class="glyphicon glyphicon-info-sign"></p>
		 					Item Name&emsp;
		 					<td>:</td>
		 					<td><input type="text" name="name"></td>
		 				</tr>
		 				<tr>
		 					<td><br /></td>
		 				</tr>

		 				<!--<div class="col-lg-4 col-xs-12">-->
		 					<tr><td><p class="	glyphicon glyphicon-th-list"></p>
		 					Category&emsp;
		 					<td>:</td>&emsp;
		 					<td><input type="text" name="category"></td>
		 					</tr>

		 				<tr>
		 					<td><br /></td>
		 				</tr>


		 				<!--<div class="col-lg-4 col-xs-12">-->
		 					<tr><td><p class="glyphicon glyphicon-map-marker"></p>
		 					Location&emsp;
		 					<td>:</td>&emsp;
		 					<td><input type="text" name="location" ></td>
		 				</tr>

		 			<tr>
		 					<td><br /></td>
		 				</tr>

		 			</table>
		 				
	 			
	 			<br>
	 			<center>
	 			<!-- <a href="searchAnItem.php?hello=true&name=$name&location=true&location2=$location"> -->
	 				<!-- <input type="button" name="test" id="test" value="RUN" /><br/> -->
					<button type="submit" class="btn btn-info"><h4><span class="glyphicon glyphicon-search"></span> Search</h4></button>
				<!-- </a> -->
				</center>


	 			</form>


	 			<br>

				<?php

				/*function testfun()
				{
				   echo "Your test function on button click is working";
				}
				if(array_key_exists('test',$_POST)){
				   testfun();
				}*/

				?>

	 		</div>


	 	</div>

	  <!-- ========================= SEARCH BAR ENDS ============================= -->

	  	<br/>


	  	


	  	<div class="container">
	    <div class="row">
	        
	    	<?php

				
				$items =  get_items();
						

				if (isset($_POST['location'])){		
					foreach($items as $item){
						
						if ( $item['Location'] == $_POST['location']){

			echo '<div class="col-md-4">
		              <div class="thumbnail">
		                <img src="http://tech.firstpost.com/wp-content/uploads/2014/09/Apple_iPhone6_Reuters.jpg" alt="" class="img-responsive">
		                <div class="caption">
		                  <h4 class="pull-right">&#8377;' . $item['Price']. '</h4>
		                  <h4><a href="#">' . $item['Title']. '</a></h4>
		                  <p>'. $item['Description']. '</p>
		                </div>
		                <div class="ratings">
		                  <p style = "text-align: center;"><b>'. $item['RName'] .' 
		                    from '. $item['Location'] .'
		                  </b></p>
		                </div>
		                <div class="space-ten"></div>
		                <div class="btn-ground text-center">
		                    <a href="item.php?title='.$item['Title'].'&price='.$item['Price'].'&RName='.$item['RName'].'&location='.$item['Location'].'"> 
		                    <button type="button" class="btn btn-primary">Buy Now</button>
		                    </a>
		                    
		                </div>
		                <div class="space-ten"></div>
		              </div>
		            </div>' ;

							/*echo '<strong>'.$item['Title'].': <br></strong>';
							echo $item['Description'].'<br><br>';*/
						}
					}
				}

		

		
		
				else {
					foreach($items as $item){
			echo '<div class="col-md-4">
		              <div class="thumbnail">
		                <img src="http://tech.firstpost.com/wp-content/uploads/2014/09/Apple_iPhone6_Reuters.jpg" alt="" class="img-responsive">
		                <div class="caption">
		                  <h4 class="pull-right">&#8377;' . $item['Price']. '</h4>
		                  <h4><a href="#">' . $item['Title']. '</a></h4>
		                  <p>'. $item['Description']. '</p>
		                </div>
		                <div class="ratings">
		                  <p style = "text-align: center;"><b>'. $item['RName'] .' 
		                    from '. $item['Location'] .'
		                  </b></p>
		                </div>
		                <div class="space-ten"></div>
		                <div class="btn-ground text-center">
		                    <a href="items/item.php?title='.$item['Title'].'&price='.$item['Price'].'&RName='.$item['RName'].'&location='.$item['Location'].'&Description='.$item['Description'].'"> 
		                    <button type="button" class="btn btn-primary">Buy Now</button>
		                    </a>
		                </div>
		                <div class="space-ten"></div>
		              </div>
		            </div>' ;
					}
				}
		
								
			?>

</body>
</html>
