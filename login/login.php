<?php 

	session_start();

	if ( !isset($_SESSION['sess_user']) )
		/*echo $_SESSION['sess_user'];*/

 ?>

<!DOCTYPE html>
<html> 
<head>
	
	<title>Login to Experentals</title>

	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

	<link rel="stylesheet" type="text/css" href="css/header.css">


	<style type="text/css">
		
		/* enable absolute positioning */
		.inner-addon { 
		    position: relative; 
		}

		/* style icon */
		.inner-addon .glyphicon {
		  position: absolute;
		  padding: 10px;
		  pointer-events: none;
		}

		/* align icon */
		.left-addon .glyphicon  { left:  0px;}
		.right-addon .glyphicon { right: 0px;}

		/* add padding  */
		.left-addon input  { padding-left:  30px; }
		.right-addon input { padding-right: 30px; }

	/*=========CSS CODED================*/
	
	.card {
	    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	    transition: 0.3s;
	    width: 40%;
	}
	/*rgba(0,0,0,0.2)*/
	.card:hover {
	    box-shadow: 0 4px 8px 0 white;
	}

	.container {
	    padding: 2px 16px;
	}
	
	/*NET*/
	.nav-tabs { border-bottom: 2px solid #DDD; }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
    .nav-tabs > li > a { border: none; color: #666; }
        .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #4285F4 !important; background: transparent; }
        .nav-tabs > li > a::after { content: ""; background: #4285F4; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
    .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
	.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
	/*Done*/



	</style>

	<script type="text/javascript">

		/*=========== For Signup ===========*/				  		
		
		function validateForm() {

		    
		    var username = document.signup.user;
		    var password = document.signup.pass;
		    var cpassword = document.signup.cpass;
		    
		    if (username.value.length == 0 ){
		    	alert("UserName cannot be empty !!");
		    	username.focus();
		    	return false;
		    }

		    var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;  
			if(!password.value.match(paswd))   
			{    
		    	alert('password between 7 to 15 characters which contain at least one numeric digit and a special character!')  
				password.focus();
				return false;
			}

		    if ( password.value != cpassword.value) {
		        alert("Password should be same !!");
				cpassword.focus();		
				return false;        
		        
		    }

		    return true;
		}

		/*============ Signup Done =================*/

		/*============== For Login ==============*/

		function validateForm2() {
		    
		    var username = document.login.user;
		    var password = document.login.pass;

		    if (username.value == "" ){
		    	document.getElementById("PASS").style.display = "block";
		    	username.focus();
		    	return false;
		    }


		    var paswd =  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;  


			if(!password.value.match(paswd)) {
				username.focus();
				document.getElementById("PASS").style.display = "block";  
				return false;
			}  
			return true;
		}

		/*============== LogIn Done =============*/

	</script>




</head>
<body style="background: radial-gradient(ellipse at center, rgb(17, 67, 96) 0%, rgb(17, 45, 68) 50%);">


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
            <li><a href="../finalindex.php">Home</a></li>
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

           	if (!isset($_GET['open']))
	  			$var = "login";
		  	else
		  		$var = $_GET['open'];
	  	



            if  (!array_key_exists('sess_user',$_SESSION) && empty($_SESSION['sess_user'])){
              
              
              

              if ( $var != "login")
              	echo '<li class="active"><a href="../login/login.php?open=signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li><li><a href="../login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
              
              else
              	echo '<li><a href="../login/login.php?open=signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li><li class="active"	><a href="../login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
              
              
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




	<!-- =================TRYING STARTS========================= -->




	<div style="text-align: center; color: white; font-family: Georgia, serif;font-size: 60px;margin-top: 70px;">

		<b>Experentals.</b>

		<!-- <img src="../images/logowb small.png" width="200px" height="100px" > --><!-- style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		"  -->
	</div>
	
	<div style="margin-top: 1" >
	</div>
	
	<div style="opacity: 0.7;"><!-- background-image: url(123.png); border-width: 1px;border-style: solid; -->

	<div class="card" style="padding: 10px 10px 10px 10px;max-width: 500px;margin: auto; min-width: 300px;	background-color: white;">
	

		

	  	<?php

	  	if (!isset($_GET['open']))
	  			$var = "login";
		  	else
		  		$var = $_GET['open'];

	  	echo '
	  	<ul class="nav nav-tabs nav-justified">';
			
	  		if ($var == "login"){ 
			   echo '<li class="active"><a data-toggle="tab" href="#LogIn"><b>LogIn</b></a></li>
			   		 <li><a data-toggle="tab" href="#SignUp"><b>Sign Up</b></a></li>';
			}
			else{
				echo '<li><a data-toggle="tab" href="#LogIn"><b>LogIn</b></a></li>
					  <li class="active"><a data-toggle="tab" href="#SignUp"><b>Sign Up</b></a></li>';
			}


			
			echo'
	  	</ul>
	  	<hr>
	  	<div ID = "PASS" style="color: red; display: none; text-align: center;"><p style="background-color: rgba(255, 0, 0, 0.4);">Invalid Username or Password !!</p></div>
	  	<div class="tab-content">';

	  	if ($var == "login"){ 
		   echo '<div id="LogIn" class="tab-pane fade in active">';
		}
		else{
			echo '<div id="LogIn" class="tab-pane fade">';
		}

		echo '<form action = "/experentals/login/logindb.php" name="login" method = "POST" onsubmit="return validateForm2()">

				   <div class="form-group">
				     <label >Username:</label>
				     <div class="inner-addon left-addon">
						<i class="glyphicon glyphicon-user"></i>
						<input type="text" class="form-control" placeholder="UserName" name = "user">

					</div>
				   </div>


				   <div class="form-group">
				     <label >Password:</label>
				     <div class="inner-addon left-addon">
						<i class="glyphicon glyphicon-lock"></i>
						<input type="password" class="form-control" placeholder="Password" name = "pass">
						
					</div>
				   </div>
				   <div class="checkbox" style="text-align: center;">
				     <label><input type="checkbox"> Remember me</label>
				   	 <br><br>
 				   	 <input type = "submit" name = "submit" class="btn btn-warning btn-lg">
 					</div>
 				</form>   	
		    </div>';
	    
	    	if ($var == "login"){ 
			   echo '<div  id="SignUp" class="tab-pane fade" >';
			}
			else{
				echo '<div id="SignUp" class="tab-pane fade in active">';
			}

			echo '
	    	
		      <form name="signup" action = "signupdb.php" method = "POST" name = "signup" onsubmit="return validateForm()">

				   <div class="form-group">
				     <label >Username:</label>
				     <div class="inner-addon left-addon">
						<i class="glyphicon glyphicon-user"></i>
						<input type="text" class="form-control" id="uemail" placeholder="UserName" name = "user">
					</div>
				   </div>



				   <!-- <div class="form-group">
				     <label >Email:</label>
				     <div class="inner-addon left-addon">
						<i class="glyphicon glyphicon-envelope"></i>
						<input type="email" class="form-control" id="email" placeholder="Email">
					</div>
				   </div> -->

				   


				   <div class="form-group">
				     <label >Password:</label>
				     <div class="inner-addon left-addon">
						<i class="glyphicon glyphicon-lock"></i>
						<input type="password" class="form-control" id="pwd" placeholder="Password" name = "pass">
					</div>
				   </div>


				   <div class="form-group">
				     <label >Confirm Password:</label>
				     <div class="inner-addon left-addon">
						<i class="glyphicon glyphicon-lock"></i>
						<input type="password" class="form-control" id="conpwd" placeholder="Confirm Password" name = "cpass">
					</div>
				   </div>




				   <div class="checkbox" style="text-align: center;">
				   	 <input type = "submit" name = "submit" class="btn btn-warning btn-lg">	
 				   </div>

 				   
 				</form>
			</div>

		</div>
		';
		?>

		<hr>
		
	</div>
	</div>
	<!-- ======================TRYING ENDS==================== -->

</body>
</html>
