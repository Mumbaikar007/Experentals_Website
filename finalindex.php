<?php
  session_start();

  if  (!array_key_exists('sess_user',$_SESSION) && empty($_SESSION['sess_user']))
    //echo '<script>alert("Log in first");</script>'
?>

<!DOCTYPE html>
<html>
<head>
  
  <title>Welcome to ExpeRentals</title>


  <meta name="viewport" content="width=device-width, initial-scale=1.0">


   <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="js/typewriter.js"></script> 

  <!-- <link rel="stylesheet" type="text/css" href="css/header.css"> -->
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <link rel="stylesheet" type="text/css" href="css/css.css">


   <style type="text/css">
    
     /*img.abc:hover{
      box-shadow: 10px 10px gray;
     */ 
      /*filter: alpha(opacity=50);*/
    /*}*/

    body {
      overflow-x: hidden;
    }

    img.center {
    display: block;
    margin: 0 auto;
    }

    #cont{
    	background-color: #b2c2bf;
    }

    #hex3 {
    width: 200px;
    height: 200px;
    }

    #color3 {
    background-color: gray;
    }

    .hexagon-wrapper {
    text-align: center;
    margin: 20px;
    position: relative;
    display: inline-block;
    opacity:0.5;
    }

    .hexagon {
    height: 100%;
    width: calc(100% * 0.57735);
    display: inline-block;
    }

    .hexagon:before {
    position: absolute;
    top: 0;
    right: calc((100% / 2) - ((100% * 0.57735) / 2));
    background-color: inherit;
    height: inherit;
    width: inherit;
    content: '';
    transform: rotateZ(60deg);
    }

    .hexagon:after {
    position: absolute;
    top: 0;
    right: calc((100% / 2) - ((100% * 0.57735) / 2));
    background-color: inherit;
    height: inherit;
    width: inherit;
    content: '';
    transform: rotateZ(-60deg);
    }


    /* NET 1 DES... */ 

    .destacados{
        padding: 20px 0;
      text-align: center;
    }
    .destacados > div > div{
      padding: 10px;
      border: 1px solid transparent;
      border-radius: 4px;
      transition: 0.2s;
    }
    .destacados > div:hover > div{
      margin-top: -10px;
      border: 1px solid rgb(200, 200, 200);
      box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px;
      background: rgba(200, 200, 200, 0.1);
      transition: 0.5s;
    }


    /* NET 1 DES ENDS*/

  </style>


</head>
<body>


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
         <a class="navbar-brand" href="finalindex.php">ExpeRentals</a>
         
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <!--<li class="active"><a href="finalindex.php">Home</a></li>-->
            <li><a href="RentandLess/searchAnItem.php">Search An Item</a></li>
            <li><a href="RentandLess/putAd.php">Rent An Item</a></li>
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


            <li><a href="ChatSystem/thechat.php">Chat</a></li>
            <?php



            if  (!array_key_exists('sess_user',$_SESSION) && empty($_SESSION['sess_user'])){
              
              echo '
              <li><a href="login/login.php?open=signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
              
            }

            else {
              echo '
              <li><a href="payment/toBuy.php">Payments</a></li>
              <li><a href="payment/toGive.php">Allot</a></li>
              <li><a href="login/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> ';
            }

            ?>

          </ul>
        </div>
      </div>
    </nav>


  </header>
  <!-- ================================HEADER ENDS============================ -->

  <!-- <div style="height: 100px;"></div> -->



  <!-- ===================INTRODUCTION: LOGO AND MOTO STARTS==================== -->
  
  <div class="" style="background-image: url(images/homepage/background1.jpg);background-repeat: no-repeat;width: 100%;-webkit-background-size: cover;height: 600px;margin-top: -20px; ">
    
    <div align="center" style=" background-size: 100%;min-height: 500px;padding-top: 20px;">
      
      <img src="logonav.png" alt="ExpeRentals LOGO" style="margin-top: 40px;margin-bottom: -30px;"><br />
      <p style="color:white; font-size: 100px;font-family: Georgia, serif;margin-bottom: -30px;"> Experentals</p><br />

      <!--<p  class="large-devices-only typewrite" style="font-size: 100px;color: white;font-family: Georgia, serif" data-period="2000" data-type='[ "ExpeRentals" ]'></p>-->

     <p  class="large-devices-only typewrite" style="font-size: 50px;color: white;font-family: Georgia, serif" data-period="2000" data-type='[ "Rentals for Experiments" ]'></p>
     <p style="color: white;font-size: 20px">We provide low cost availability of equipments for sharing of electronics and hardware<br /> among people.Our system bridges those with surplus electronic equipments to those who require them</p>

     <!-- <p style="color:white; font-size: 30px;font-family: Georgia, serif;"> Rentals for Experiments</p><br />-->
      <!-- <p style="color: white;font-size: 18px;">We facilitie low cost availability of equipments for sharing of electronics and hardware among people.<br />Our system bridges those with surplus electronic equipments to those who require them.</p> -->

    </div>


  </div>
  
  <!-- =====================INTRODUCTION ENDS========================= -->


  <!-- ==========================HOW IT WORKS STARTS============================== -->
  
  <div  id = "cont" style="height: 450px;background-color: #03a9f4;padding-top: 50px;">

  <!-- style="background-color: #03a9f4;min-height: 500px;padding: 30px 10px 20px 10px;" --> 
      
      <!--<p style="color: white;text-align: center;font-size: 35px;margin-bottom: 20px;" class="bg-primary"> How it works </p>-->
      <div style="font-size: 35px; text-align: center;color: white;margin-bottom: 15px;">
       How it Works ?
      </div>    
  

    
<!--
  <div class="container" style="min-height: 400px; padding-top: 30px; color: white;background-image: url(images/homepage/s1.png);">
    
    <!-- <h2 align="center">How it works</h2> -->

    <!-- <p style="text-align: center;margin-top: 150px;s">HOW IT WORKS</p> 


    <div class="container">

      <!-- ========= FIRST 3 HEXAGONS ============== -
      <div class="row">

        <div class="col-lg-4" style="text-align: center;">
                    
          <div id="hex3" class="hexagon-wrapper">
              <div id="color3" class="hexagon">
                <b >Need help getting started ?</b><br />This article explains what you need to know to start working on experentals</div>
          </div>


        </div>        

        <div class="col-lg-4" style="text-align: center;">
          
          <div id="hex3" class="hexagon-wrapper">
              <div id="color3" class="hexagon"></div>
          </div>

        </div>

        <div class="col-lg-4" style="text-align: center;">
          
          <div id="hex3" class="hexagon-wrapper">
              <div id="color3" class="hexagon"></div>
          </div>

        </div>

      </div>

      <!-- ============= FIRST 3 HEXAGON ENDS ================ -

      <!-- =============== 2 HEXAGONS ON LARGE SCREEN==================== 

      <div class="row large-devices-only">
        
        <div class="col-md-6" style="text-align: right; right: 66px;">

            <div id="hex3" class="hexagon-wrapper">
                <div id="color3" class="hexagon"></div>
            </div>
          
        </div>

        <div class="col-md-6">

          <div id="hex3" class="hexagon-wrapper" style="left: 66px;">
              <div id="color3" class="hexagon"></div>
          </div>
          
        </div>

      </div>

      <div class="row mobile-only">
        
        <div class="col-md-6" style="text-align: center;" >

            <div id="hex3" class="hexagon-wrapper">
                <div id="color3" class="hexagon"></div>
            </div>
          
        </div>

        <div class="col-md-6" style="text-align: center;">

          <div id="hex3" class="hexagon-wrapper" >
              <div id="color3" class="hexagon"></div>
          </div>
          
        </div>

      </div>

      
    </div>

    <br><br>



  </div>-->
-

<!--<div id="cont" class="container" style="   background-color:rgba(255, 255,0, 0.4);padding-bottom: 20px;"><br /><br /> -->
      <center style="font-size: 20px">
        <a href="RentandLess/putAd.php"><button class="circle-button"><u>Step.1</u><br />Put up Ad<br/><h4>Renter puts up an ad for the devices.</h4></button></a>&emsp;&emsp;
          <a href="RentandLess/searchAnItem.php"><button class="circle-button" ><u>Step.2</u><br />Search<br /><h4>Lessors will search for devices.</h4></button></a>&emsp;&emsp;
          <button class="circle-button" ><u>Step.3</u><br />Bid<br /><h4>Lessor will bid for devices he needs.</h4></button></a>&emsp;&emsp;
        <a href="ChatSystem/thechat.php"><button class="circle-button" ><u>Step.4</u><br />Chat<br /><h4>Where lessor will talk to the owner.</h4></button></a>&emsp;&emsp;
          <a href="payment/payment.php"><button class="circle-button" ><u>Step.5</u><br />Payment<br /><h4>Once deal is done,proceed to pay</h4></button></a>
      </center>
    </div>


  <!-- =======================HOW IT WORKS ENDS================================= -->





  <!-- =========================CHOICE: RENTER OR LESSOR STARTS==================== -->
  <div class="parallax" style="height: 450px;padding-bottom: 20px; background-image: url(images/homepage/wall2.jpg);">
    
    <div style="font-size: 35px; text-align: center;color: white" class="bg-primary">
      <!--What do you want to do ?-->
       <p  class="large-devices-only typewrite" style="font-size: 35px;color: white;font-family: Georgia, serif" data-period="2000" data-type='[ "What do you want to do ?" ]'></p>
    </div>

    <div class="row" >

      <div class="col-lg-4 col-xs-12 " style=" padding-top: 40px;text-align: right;">
        
        <a href="RentandLess/putAd.php">
          <img class = "abc img-responsive mobile-only center" src="images/homepage/lessor.jpg" alt="RENTER" width="250px" height="250px" align="center" style="opacity: 0.6">
        </a>
        
      </div>
      
      <div class="col-lg-4 col-xs-12" style="padding: 100px;">
        
        <div style="font-size: 100px; color: white"></div>
        
      </div> 

      <div class="col-lg-4 col-xs-12" style="text-align: center; padding-top: 40px;">

        <a href="RentandLess/searchAnItem.php">
          <img class = "abc img-responsive center mobile-only" src="images/homepage/lessee.jpg" alt="LESSOR" width="250px" height="250px" align="center" style="opacity: 0.6">>
        </a>


      </div>

    </div>
  
</div>
  <!--</div>-->
  <!-- ==========================CHOICE ENDS============================= -->


  <!-- ==========================TOP RENTERS LESSOR STARTS============================== -->
    
  <!--<div class = "container" style="padding: 40px 10px 40px 10px;">

    <div style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
      <span style="font-size: 40px; background-color: white; padding: 0 10px;">
        OUR ... <!--Padding is optional
      </span>
    </div>

    <br><br><br>

    <div class="row">

      <div class="col-lg-6 col-sm-12" >
        
        <h2>Top Renters</h2>

        <table class="table table-hover">
            <thead>
              <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
              </tr>
              <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
              </tr>
              <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
              </tr>
            </tbody>
          </table>

      </div>
      

      <div class="col-lg-6 col-sm-12">
        
        <h2>Top Lessors</h2>

        <table class="table table-hover">
            <thead>
              <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
              </tr>
              <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
              </tr>
              <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
              </tr>
            </tbody>
          </table>
 

      </div>

    </div>-->
    


  </div>
  <!-- =======================TOP RENTER LESSOR ENDS================================= -->


  <!-- ==========================ABOUT US STARTS============================== -->
  <!--<div class="container">
    <div class="row destacados">
      <div class="col-md-4">
          <div>
          <img src="http://lorempixel.com/200/200/abstract/1/" alt="Texto Alternativo" class="img-circle img-thumbnail">
          <h2>Diseño Web</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="#" class="btn btn-primary" title="Enlace">Contact now »</a>
        </div>
      </div>

      <div class="col-md-4">
        <div>
          <img src="http://lorempixel.com/200/200/abstract/2/" alt="Texto Alternativo" class="img-circle img-thumbnail">
          <h2>Desarrollo Web</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="#" class="btn btn-primary" title="Enlace">Contact now »</a>
        </div>
      </div>

      <div class="col-md-4">
        <div>
          <img src="http://lorempixel.com/200/200/abstract/3/" alt="Texto Alternativo" class="img-circle img-thumbnail">
          <h2>Alojamiento Web</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="#" class="btn btn-primary" title="Enlace">Contact now »</a>
        </div>
      </div>
    </div>
  </div> -->
  <div class="parallax" style="background-image: url(images/homepage/wall1.jpg); color: white">
      <div style="font-size: 35px; text-align: center;color: white" class="bg-primary">
      <!--What do you want to do ?-->
       <p  class="large-devices-only typewrite" style="font-size: 35px;color: white;font-family: Georgia, serif" data-period="2000" data-type='[ " Need help ? Talk to our experts " ]'></p>
    </div>

    <div class="row destacados">
    	<!--<p style="font-size: 35px" class="bg-primary">Need help ? Talk to our experts</p>-->

      <div class="col-md-4">
          <div>
          <img src="images/homepage/adarsh.jpg" alt="Texto Alternativo" class="img-circle img-thumbnail">
          <h2>Adarsh Pai</h2>
          <p>Co-founder,EXPERENTALS.<br />Specialist in Machine Learning</p>
          <!--<a href="#" class="btn btn-primary" title="Enlace">Contact now >></a>-->
<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Contact now
    <span class="caret"></span></button>
    <ul class="dropdown-menu" >
      <li><a href="#">Call: 09167846868</a></li>
      <li><a href="#">Email: paiadarsh.a@gmail.com</a></li>
     
    </ul>


        </div>
      </div>

      <div class="col-md-4">
        <div>
          <img src="images/homepage/aditi.jpg" alt="Texto Alternativo" class="img-circle img-thumbnail" >
          <h2>Aditi Pawaskar</h2>
          <p>Co-founder,EXPERENTALS.<br />Specialist in Artificial Intelligence</p>
          <!--<a href="#" class="btn btn-primary" title="Enlace">Contact now >></a>-->
          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Contact now
    <span class="caret"></span></button>
    <ul class="dropdown-menu" style="align-content: right">
      <li><a href="#">Call: 07045211359</a></li>
      <li><a href="#">Email: aditipawaskar97@gmail.com</a></li>
     
    </ul>
        </div>
      </div>

      <div class="col-md-4">
        <div>
          <img src="images/homepage/prnv.jpg" alt="Texto Alternativo" class="img-circle img-thumbnail">
          
          <h2>Pranav Puranik</h2>
          <p><p>Co-founder,EXPERENTALS.<br />Specialist in Internet of Things</p>
          <!--<a href="#" class="btn btn-primary" title="Enlace">Contact now >></a>-->
          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Contact now
    <span class="caret"></span></button>
    <ul class="dropdown-menu" >
      <li><a href="#">Call: 07045884009</a></li>
      <li><a href="#">Email: brainteaser97@gmail.com</a></li>
     
    </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- =======================ABOUT US ENDS================================= -->


  
    <!--==================== Footer ===================-->
    
    <footer class="footerclass">
      <div class = "container">
        <div class="row">
          <div class="col-md-4 right"  style="color: white;">
              <h2 >Experentals</h2>
                <p>We provide low cost availability of equipments for sharing of electronics and hardware among people.Our system bridges those with surplus electronic equipments to those who require them.</p>
                <p>All rights reserved</p>
            </div>
          <div class="col-md-4 right">
              <h4 >Quick Links</h4>
              <div class="col-md-6">
                    <ul class="pages">
                        <!--<li><a href="#">Lessor</a></li>
                        <li><a href="#">Lessee</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">SignUp</a></li>-->
                        <li><a href="login/login.php?open=signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li><br />
              <li><a href="login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <!--<li><a href="#">History</a></li>-->
                    </ul>
                </div>
              <div class="col-md-6">
                    <ul class="list" >
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
          <div class="col-md-4 ">
              <h4>Follow Us</h4>
              <ul>
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Instagram</a></li>
                  <li><a href="#">RSS</a></li>
                </ul>
            </div>
          
        </div>
      </div>
    </footer>
  
    <!-- ==============================FOOTER ENDS =========================== -->

</body>
</html>
