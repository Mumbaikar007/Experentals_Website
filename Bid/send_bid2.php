<?php 
	
	session_start();
		    
		    /*$conn=mysqli_connect('localhost','root','') or die(mysqli_error());  
		    mysqli_select_db($conn, 'escrow') or die("cannot select DB");  
		  
		    $renter_name = $_POST['renter_name'];
		    //$category = $_POST['category'];
		    //$description = $_POST['description'];
		    
		    $cur_user = $_SESSION['sess_user'];

		    $sql = "SELECT pid FROM rent WHERE renter_name='".$_POST['renter_name']."'";
		    $result = mysqli_query($conn, $sql); // result = renter_id

			$sql2 = "SELECT pid FROM login WHERE renter_name='".$cur_user."'";
		    $result2 = mysqli_query($conn, $sql2); // gives pid from login which is = bidder_id	    

		    if ((mysqli_num_rows($result) == 1)){
				if ($row = mysqli_fetch_assoc($result)){
					$the_result = $row["pid"];
				}

				var_dump($the_result);
				$the_result2 = $_SESSION['user_pid'];
				var_dump($the_result2);
				$query = "INSERT INTO `escrow`.`bid`(bidder_id, renter_id, price) VALUES (3,3,3)";
		    
		    	if (mysqli_query($conn,$query)){
		    		echo "working";
					header("Location: done.php");
				}
				else {
					echo "else";

					return false;
				}


		    }*/
		     
			
	  		$price = $_POST['price'];
		    
		    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
		    mysqli_select_db($con, 'escrow') or die("cannot select DB");  
		  
		    
		    $sql = "SELECT pid FROM rent WHERE renter_name='".$_POST['renter_name']."'";
		    $result = mysqli_query($con, $sql); // result = renter_id

		    if ((mysqli_num_rows($result) == 1)){
				if ($row = mysqli_fetch_assoc($result)){
					$the_result = $row["pid"];
				}
			}

			echo $_POST['item_name'];
		    $query = "INSERT INTO `escrow`.`bid`(bidd,renter,bidder_id, renter_id, price, ItemName, BidderName) VALUES (3,3,".$_SESSION['user_pid'].", $the_result, $price, '".$_POST['item_name']."', '".$_SESSION['sess_user']."')" ;
  	
		    if ( $run = mysqli_query($con,$query)){
				header("Location: done.php");
			}
			else {
				echo "string";

				return false;
			}

?>