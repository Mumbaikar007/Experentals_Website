<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Payment Form</title>
  
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


	<!-- =========================HEADER==================================== -->
  <header >
    
    <!--  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">Experentals</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Page 1-1</a></li>
                <li><a href="#">Page 1-2</a></li>
                <li><a href="#">Page 1-3</a></li>
              </ul>
            </li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav> -->


    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
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
            <li class="active"><a href="../finalindex.php">Home</a></li>
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
            <li><a href="../RentandLess/searchAnItem.php">Search An Item</a></li>
            <li><a href="#"></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">

            <li><a href="../login/login.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="../login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              <!-- <li style="color: white;margin-top: 11px;">Search : <input type="text" name="search" value="Type a keyword" style="color: black;"> --> ';


            <?php


/*
            if ( isset($_SESSION['lllog']) ){
              
              echo '
              <li><a href="../login/login.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="../login/login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              <!-- <li style="color: white;margin-top: 11px;">Search : <input type="text" name="search" value="Type a keyword" style="color: black;"> --> ';
            }

            else {
              echo '
              
              <li><a href="../login/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
              <!-- <li style="color: white;margin-top: 11px;">Search : <input type="text" name="search" value="Type a keyword" style="color: black;"> --> ';
            }
*/
            ?>

          </ul>
        </div>
      </div>
    </nav>


  </header>
  <!-- ================================HEADER ENDS============================ -->



	<div class="container">
	  <div id="Checkout" class="inline">
	      <h1>Pay Invoice</h1>
	      <div class="card-row">
	          <span class="visa"></span>
	          <span class="mastercard"></span>
	          <span class="amex"></span>
	          <span class="discover"></span>
	      </div>
	      <form>
	          <div class="form-group">
	              <label for="PaymentAmount">Payment amount</label>
	              <div class="amount-placeholder">
	                  <span>$</span>
	                  <span>500.00</span>
	              </div>
	          </div>
	          <div class="form-group">
	              <label or="NameOnCard">Name on card</label>
	              <input id="NameOnCard" class="form-control" type="text" maxlength="255"></input>
	          </div>
	          <div class="form-group">
	              <label for="CreditCardNumber">Card number</label>
	              <input id="CreditCardNumber" class="null card-image form-control" type="text"></input>
	          </div>
	          <div class="expiry-date-group form-group">
	              <label for="ExpiryDate">Expiry date</label>
	              <input id="ExpiryDate" class="form-control" type="text" placeholder="MM / YY" maxlength="7"></input>
	          </div>
	          <div class="security-code-group form-group">
	              <label for="SecurityCode">Security code</label>
	              <div class="input-container" >
	                  <input id="SecurityCode" class="form-control" type="text" ></input>
	                  <i id="cvc" class="fa fa-question-circle"></i>
	              </div>
	              <div class="cvc-preview-container two-card hide">
	                  <div class="amex-cvc-preview"></div>
	                  <div class="visa-mc-dis-cvc-preview"></div>
	              </div>
	          </div>
	          <div class="zip-code-group form-group">
	              <label for="ZIPCode">ZIP/Postal code</label>
	              <div class="input-container">
	                  <input id="ZIPCode" class="form-control" type="text" maxlength="10"></input>
	                  <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Enter the ZIP/Postal code for your credit card billing address."><i class="fa fa-question-circle"></i></a>
	              </div>
	          </div>
	          <button id="PayButton" class="btn btn-block btn-success submit-button" type="submit">
	              <span class="submit-button-lock"></span>
	              <span class="align-middle">Pay $500.00</span>
	          </button><br /><br>
	          <b>NET BANKING:</b>
	          <ul>
	          	<li><a href="https://infinity.icicibank.com/corp/AuthenticationController?FORMSGROUP_ID__=AuthenticationFG&__START_TRAN_FLAG__=Y&FG_BUTTONS__=LOAD&ACTION.LOAD=Y&AuthenticationFG.LOGIN_FLAG=1&BANK_ID=ICI">ICICI</a></li>
	          	<li><a href="https://retail.onlinesbi.com/retail/login.htm">SBI</a></li>
	          	<li><a href="https://retail.axisbank.co.in/wps/portal/rBanking/axisebanking/AxisRetailLogin/!ut/p/a1/04_Sj9CPykssy0xPLMnMz0vMAfGjzOKNAzxMjIwNjLwsQp0MDBw9PUOd3HwdDQwMjIEKIoEKDHAARwNC-sP1o_ArMYIqwGNFQW6EQaajoiIAVNL82A!!/dl5/d5/L2dBISEvZ0FBIS9nQSEh/">AXIS</a></li>
	          	<li><a href="https://netbanking.hdfcbank.com/netbanking/?_ga=2.170182496.1946234194.1508090299-319934479.1508090299">HDFC</a></li>

	          </ul>
	          
	      </form>
	  </div>
	</div>



 	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
    <script  src="js/index.js"></script>

</body>
</html>
