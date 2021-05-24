

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Bootstrap Website Templates">

    <title>Bitcoin Shopping</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <link rel="stylesheet" href="css/jquery.lightbox.min.css">

   
    <link href="css/style.css" rel="stylesheet">
    
  
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
  
</head>

<body id="page-top">

   <nav id="mainNav" class="navbar navbar-default navbar-fixed-top"> 
        <div class="container">
           
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="images/btc.png" class="img-responsive"></a>
            </div>

            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-center">
                    <li>
                        <a class="page-scroll" href="#page-top"><h2>Buy Bitcoin In Sale price: less -10 % </h2></a>
                    </li>
 
                    
                   
                </ul>
            </div>
        </div>
    </nav>
    
    
   
  <?php
  function getPrice($url) {
      $decode = file_get_contents($url);
      return json_decode($decode, true);
  }

  $btcUSD = getPrice('https://www.bitstamp.net/api/v2/ticker_hour/btcusd/');
  $price = $btcUSD["last"];
  $alennus = ($price * 10) / 100;
  $saleprice = $price - $alennus;
  
  
 

?>

<section id="buyrate" class="bwt-buyrate text-center">
  <div class="container text-center">
        


    <div class="row">
      <div class="col-xl-9">
        <div class="bdr">
          <h2>Buy Bitcoin</h2>
          <img class="center" src="images/btc.png" class="img-responsive" alt="">
          
          <h3 id="btcPrice"><?php echo $price  ?> / USD </h3>
          <strong>Your Price:</strong><h2 class="text-info"> <?php echo $saleprice ?> </h2>
          
          
          <div class="mb-3">
                    <label for="inputAddress" class="form-label" name="walletAddress">Wallet Address</label>
                    <input type="text" class="form-control" id="yourwalletaddress" placeholder="Your Wallet Address">
                  </div>
          <p></p>
            
            

          <div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'pill',
          color: 'gold',
          layout: 'vertical',
          label: 'buynow',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"description":"1000 USD Bitcoin","amount":{"currency_code":"USD","value":1000}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            alert('Transaction completed by ' + details.payer.name.given_name + '!');
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>




      </div>
    </div>
    <!--

    <div class="col-md-6">
              <div class="bdr">
                <h2>Sell Bitcoin</h2>
                <div class="image"><img src="images/btc.png" class="img-responsive" alt=""></div>
            <p>BTC Rate: <br>
            <h3 class="text-warning"> / USD </h3><br>
            </p>
            
              <form>
                      <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    
                  </div>
                  <div class="mb-3">
                    <label for="inputAddress" class="form-label">Wallet Address</label>
                    <input type="text" class="form-control" id="walletaddress" value="1DbdJD4jEn7f1Jd8zDVHmKUMXLr427xJ9D" readonly>
                  </div>
                  <div class="mb-3">
                    <label for="inputAccount" class="form-label">Account Number</label>
                    <input type="text" class="form-control" id="amount" placeholder="IBAN">
                  </div>
                  <div class="mb-3">
                    <label for="inputName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="amount" placeholder="Firstname and Familyname">
                  </div>
                  
                  <div class="mb-3">
                    <label for="inputAmount" class="form-label">Amount</label>
                    <input type="number" class="form-control" id="amount" placeholder="0.00000000 BTC">
                  </div>
                  <br>
                  <button type="submit" class="btn btn-warning btn-lg">Sell now</button>
              </form>
            
            
            
            
            </div> 
          -->
        </div> <!-- row -->
      </div> <!-- container -->
    </section>










<!--//contact-->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Lightbox JavaScript-->
    <script src="js/jquery.lightbox.min.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/script.js"></script>

</body>
</html>	