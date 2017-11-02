<?php
  
  require ('send.php');

  if(isset($_POST['send'])) {
    //echo "1<br>";
    if (updateDB( $_POST['lessor'], $_POST['id'], $_POST['title']  ) )
    {
      echo 'Message Sent';

    }
    else{
      echo 'Message failed';
    }
  }

?>

<html>
<head>
<title>Details</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">


   <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="js/typewriter.js"></script> 


    <style type="text/css">
      
      tr:nth-child(even) {
          background-color: #f2f2f2;
      }

      tr:nth-child(odd) {
          background-color: white;
      }
        
        th {
            background-color: orange;
            color: white;
        } 

        .card {
          /*box-shadow: 0 2px 4px 0 white;*/
          transition: 0.3s;
          width: 70%;
      }
      /*rgba(0,0,0,0.2)*/
      .card:hover {
          box-shadow: 0px 4px 8px 0 white;
      }

      .container {
          padding: 2px 16px;
      }

      .center {
          margin: auto;
          width: 70%;
          padding: 10px;
      }


    </style>

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
            <!--<li class="active"><a href="finalindex.php">Home</a></li>-->
            <li><a href="../RentandLess/searchAnItem.php">Search An Item</a></li>
            <li><a href="../RentandLess/putAd.php">Rent An Item</a></li>
            <!--<li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Category <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Power source and power management</a></li>
                <li><a href="#">Sensors</a></li>
                <li><a href="#">Actuators</a></li>
                <li><a href="#">Processor and memory storage</a></li>
                <li><a href="#">Wearable Electronics</a></li>
                
              </ul>
            </li>-->
            
          </ul>
          <ul class="nav navbar-nav navbar-right">


            <li><a href="../ChatSystem/thechat.php">Chat</a></li>
            <?php



            if  (!array_key_exists('sess_user',$_SESSION) && empty($_SESSION['sess_user'])){
              
              echo '
              <li><a href="../login/login.php?open=signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="../login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
              
            }

            else {
              echo '
              <li><a href="../payment/toBuy.php">Payments</a></li>
              <li><a href="../payment/toGive.php">Allot</a></li>
              <li><a href="../login/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> ';
            }

            ?>

          </ul>
        </div>
      </div>
    </nav>


  </header>
  <!-- ================================HEADER ENDS============================ -->

    <!-- ============ HEADING ========= -->

  <div style="text-align: center; color: white; font-family: Georgia, serif;font-size: 60px;margin-top: 70px;">

    <b>Bids</b>


    <!-- <img src="../images/logowb small.png" width="200px" height="100px" > --><!-- style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    "  -->
  </div>

      <!-- =============== HEADING ENDS =============== -->

    <!-- ============ TABLE START ============ -->  
    <div class = "container" style="text-align: center; opacity: 0.7;">
     
     <div class="table-responsive card center" >          
      <table class="table" style="margin-top: -50px;">
        <thead>
          <tr>
            <th>#</th>
            <th>Item</th>
            <th>Bidder Name</th>
            <th>Price</th>
            <th>Confirm</th>
          </tr>
        </thead>
        <tbody>
          
          <?php

           

            $i = 1;
            

$conn=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($conn, 'escrow') or die("cannot select DB");  
    
    $cur_user = $_SESSION['sess_user'];

    /*$sql2 = "SELECT pid FROM login WHERE renter_name='$cur_user'";
    $result2 = mysqli_query($conn, $sql2); // gives pid from login  
*/
    
      
    $the_result2 = $_SESSION['user_pid'];  //renter_id
  
    echo '<div class="container-fluid" style="text-align: center;margin-top: 100px;">';

    $query = "SELECT * FROM bid WHERE renter_id = '".$the_result2."'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            
          $query1 = "SELECT * FROM rent WHERE title = '".$row['ItemName']."'";
          $result1 = mysqli_query($conn, $query1);
          $row1 = mysqli_fetch_assoc($result1);
          //echo $row1["rent_id"];


            echo '
              <tr>

                <td>'.$i.'</td>
                <td>'.$row["ItemName"].'</td>
                <td>'.$row["BidderName"].'</td>
                <td>'.$row['price'].'</td>


                <form action = "details.php" method = "POST">

              <input name = "lessor" type = "text" style="display:none" value='.$row["BidderName"].'>
              <input name = "id" type = "text" style="display:none" value = "'.$row1["rent_id"].'">
              <input name = "title" type = "text" style="display:none" value = "'.$row["ItemName"].'">

                <td><input type = "submit" name = "send" class = "btn btn-warning"></td>
                


                </form>
                
            ';

            $i = $i +1;
          }
    } 

    else {
        echo "0 results";
    }


          ?>


        </tbody>
      </table>
      </div>
    </div>

    <!-- ========== TABLE END ============ -->

</body>
</html>

