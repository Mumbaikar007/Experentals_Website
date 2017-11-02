	<?php 
	
	session_start();
	
	function get_payment() {

		$db_host = 'localhost';
		$db_user = 'root';
		$db_pass = '';


		$db_name = 'escrow';
		$connection = mysqli_connect($db_host, $db_user, $db_pass );

		$query = "SELECT * FROM `escrow`.`rent` WHERE renter_name = '".$_SESSION['sess_user']."'"; //ORDER BY Msg_ID DESC

		$run = mysqli_query($connection,$query);

		$payfor = array();
		while ( $row = mysqli_fetch_assoc($run)){
 
			$payfor[] = array ( "RentId" => $row['rent_id'],
								"Title" => $row['title'],
								"Category"=> $row ['category'],
								"Price"=> $row ['price'],
								"Description" => $row['description'],
								"Lessor" => $row ['lessor'],
								"RName"=> $row ['renter_name']
			);

		}

		return $payfor; 

	}

	function updateDB( $username, $rentid, $title ){

	    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
	    mysqli_select_db($con, 'escrow') or die("cannot select DB");  
	 



	    $query = "UPDATE `rent` SET `lessor`= '".$username."' WHERE `rent_id` = '".$rentid."'" ;

	    if ( $run = mysqli_query($con,$query)){
			header("Location: details.php?done=".$username."&title=".$title." ");
		}
		else {
			//echo "string";

			return false;
		}

	}

?>