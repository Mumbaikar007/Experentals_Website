<?php   
session_start();  
unset($_SESSION['sess_user']); 
unset($_SESSION['lllog']); 
session_destroy();  
header("location: ../finalindex.php");  
?>