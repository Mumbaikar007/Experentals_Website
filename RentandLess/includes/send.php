<?php 

	function send_msg( $sender, $message){
		
		$db_host = 'localhost';
		$db_user = 'root';
		$db_pass = '';


		$db_name = 'chat';
		$connection = mysqli_connect($db_host, $db_user, $db_pass );

		if (!empty($sender) && !empty($message)) {

			$sender  = mysqli_real_escape_string($connection, $sender);
			$message = mysqli_real_escape_string($connection, $message);

			$query = "INSERT INTO `chat`.`chat`(Sender, Message) VALUES ( '$sender', '$message' )" ;

			if ( $run = mysqli_query($connection,$query)){
				return true;
			}
			else {
				echo "string";

				return false;
			}

		}
		else {
			return false;
		}


	}

?>