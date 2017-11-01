
<?php


  $db_host = 'localhost';
  $db_user = 'root';
  $db_pass = '';


  $db_name = 'escrow';
  $connection = mysqli_connect($db_host, $db_user, $db_pass );

  if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $query = "DELETE FROM `escrow`.`rent` WHERE rent_id = ".$_GET['id']; 
  $run = mysqli_query($connection,$query);

?>


<!DOCTYPE html>
<html>
<head>
	   
  <title>Payment in Progress</title>
  
<meta http-equiv="refresh" content = "5;  done1.php">
   <!-- Latest compiled and minified CSS -->
  

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="typewriter.js"></script> 

<style type="text/css">
	
</style>

</head>
<body style="cursor: wait;">

      
        
    
       <p  class="large-devices-only typewrite" style="font-size: 25px;color: black;font-family: Georgia, serif; margin-top: 30px;">
         
         <center>Please Wait... <br>Your Payment is in Progress... <br>Do not click anywhere</center>

       </p>

      
    



</body>
</html>