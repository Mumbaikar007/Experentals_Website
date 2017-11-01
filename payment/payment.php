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

<!-- ACCORDION*******************************************************starts-->



<style type="text/css">
a:hover, a:visited, a:link, a:active
{
    text-decoration: none;
}
</style>



<div class="container" style="text-align: center;">
  <h1>Pay Invoice</h1>
  <p>Select a payment option </p>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"  style="font-size: 20px"><p class=" glyphicon glyphicon-credit-card"></p>&emsp;Card Payment</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse ">
        <div class="panel-body">

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
       </div>
      </div>
    </div>
  </form>

    <div class="panel panel-default">
      <div class="panel-heading">
      <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"  style="font-size: 20px"><p class=" glyphicon glyphicon-usd"></p>&emsp;Net Banking</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
          
          <b>Select a Bank</b><br /><br />
          <ul style="list-style: none;">
            <li><a href="https://infinity.icicibank.com/corp/AuthenticationController?FORMSGROUP_ID__=AuthenticationFG&__START_TRAN_FLAG__=Y&FG_BUTTONS__=LOAD&ACTION.LOAD=Y&AuthenticationFG.LOGIN_FLAG=1&BANK_ID=ICI"><button class="btn btn-success btn-lg">ICICI</button></a></li><br />
            <li><a href="https://retail.onlinesbi.com/retail/login.htm"><button class="btn btn-success btn-lg">SBI</button></a></li><br />
            <li><a href="https://retail.axisbank.co.in/wps/portal/rBanking/axisebanking/AxisRetailLogin/!ut/p/a1/04_Sj9CPykssy0xPLMnMz0vMAfGjzOKNAzxMjIwNjLwsQp0MDBw9PUOd3HwdDQwMjIEKIoEKDHAARwNC-sP1o_ArMYIqwGNFQW6EQaajoiIAVNL82A!!/dl5/d5/L2dBISEvZ0FBIS9nQSEh/"><button class="btn btn-success btn-lg">AXIS</button></a></li><br />
            <li><a href="https://netbanking.hdfcbank.com/netbanking/?_ga=2.170182496.1946234194.1508090299-319934479.1508090299"><button class="btn btn-success btn-lg">HDFC</button></a></li><br />

          </ul>

        </div>
      </div>
    </div>


    <div class="panel panel-default">
     <div class="panel-heading">
      <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"  style="font-size: 20px"><p class="  glyphicon glyphicon-phone"></p>&emsp;Paytm / Paypal</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
        
           <ul style="list-style: none;">
            <li><a href="https://paytm.com/"><button class="btn btn-primary btn-lg">Paytm</button></a></li><br />
            <li><a href="https://www.paypal.com/in/webapps/mpp/home"><button class="btn btn-primary btn-lg">Paypal</button></a></li><br />
           

          </ul>

        </div>
      </div>
    </div>
  </div> 
</div>














<!-- ACCORDION*******************************************************ends-->


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
