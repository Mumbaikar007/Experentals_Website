<?php  

	function get_payment() {

		$db_host = 'localhost';
		$db_user = 'root';
		$db_pass = '';


		$db_name = 'escrow';
		$connection = mysqli_connect($db_host, $db_user, $db_pass );

		$query = "SELECT * FROM `escrow`.`rent` WHERE lessor = '".$_SESSION['sess_user']."'"; //ORDER BY Msg_ID DESC

		$run = mysqli_query($connection,$query);

		$payfor = array();
		while ( $row = mysqli_fetch_assoc($run)){
 
			$payfor[] = array ( "RentId" => $row['rent_id'],
								"Title" => $row['title'],
								"Category"=> $row ['category'],
								"Price"=> $row ['price'],
								"Lessor" => $row ['lessor'],
								"RName"=> $row ['renter_name']
			);

		}

		return $payfor; 

	}

?>