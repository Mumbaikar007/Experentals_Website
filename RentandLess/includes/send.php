<?php 
	
	session_start();
	
	if(isset($_POST["submit"])){  
		  
	  		
		    
		    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
		    mysqli_select_db($con, 'escrow') or die("cannot select DB");  
		  
		    $title = $_POST['title'];
		    $category = $_POST['category'];
		    $description = $_POST['description'];
		    $price = $_POST['price'];


		    $query = "INSERT INTO `escrow`.`rent`(pid, title, category, description, price, location, renter_name) VALUES ( 1, '".$_POST['title']."', '".$_POST['category']."', '".$_POST['description']."', '".$_POST['price']."', '".$_POST['location']."', '".$_SESSION['sess_user']."')" ;
  
		    if ( $run = mysqli_query($con,$query)){
				echo "DONE";//header("Location: ")
			}
			else {
				//echo "string";

				return false;
			}

		
	}

?>