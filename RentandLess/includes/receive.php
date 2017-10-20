

<?php 

	function get_items() {

		$db_host = 'localhost';
		$db_user = 'root';
		$db_pass = '';


		$db_name = 'escrow';
		$connection = mysqli_connect($db_host, $db_user, $db_pass );

		$query = "SELECT * FROM `escrow`.`rent`"; //ORDER BY Msg_ID DESC

		$run = mysqli_query($connection,$query);

		$items = array();

		
		/*if (mysqli_num_rows($run) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($run)) {
		        echo "<b>" . $row["Sender"]. ": </b>" . $row["Message"] . "<br/>";
		    }
		} 
		else {
		    echo "0 results";
		}*/

		// look through query
/*		while($row = mysqli_fetch_assoc($run)){

			// add each row returned into an array
			$messages[] = $row;

			// OR just echo the data:
			echo $row['Sender']; // etc
			echo "<br>";
			
		}
*/
		while ( $row = mysqli_fetch_assoc($run)){
 												
			$items[] = array (  "Pid" => $row ['pid'], 			//naming convention is opposite
							    "Rentid"=> $row ['rent_id'],
							    "Title"=> $row ['title'],
							    "Category"=> $row ['category'],
							    "Description"=> $row ['description'],
							    "Image"=> $row ['image'],
							    "Price"=> $row ['price'],
							    "AvailableBids"=> $row ['avail_bids'],
							    "Location"=> $row ['location'],
							    "RName"=> $row ['renter_name'],
			);

		}

		return $items; 

	}

?>