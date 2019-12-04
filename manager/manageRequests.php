<?php
  require('../abs/navBar.php');
  $filename = "./" . basename(__FILE__);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <title>Manage Request</title>

  <script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../js/script.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<!-- //accent color #f2cf33 -->
<!-- //main color  #7dc9b5 -->
<body>
<?php
  $image_path = "../abs/media/logo.jpg";
  print_manager_navbar($image_path, $filename);
?>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Manage Requests </h1>
      <p class="lead">You can see open requests and fulfill the tickets as desired. </p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col border headerFont mainBlue"> Homeowner Request Information</div>
    </div>

    <div class=" row rowSm top-buffer">
      <div class="col-3  bg-light"> Ticket #1234 </div>
    </div>

    <div class=" row rowBig top-buffer">
      <div class="col-5 border secondaryColor">Description of Request...</div>
      <div class="col-1"></div>
      <textarea class="col-5 border secondaryColor" placeholder="Manager notes"></textarea>
    </div>

    <div class="row rowSm top-buffer">
      <div class="col-1 col-buffer secondaryColor">Unit 15</div>
      <div class="col-2 col-buffer secondaryColor">Dan Shank</div>
      <div class="col-1 col-buffer secondaryColor">12-1-19</div>
      <div class="col-1 col-buffer secondaryColor">Pending</div>
    </div>

    <div class="row rowHeader">
       <div class="col border top-buffer headerFont mainBlue">Vendors</div>
    </div>

    <div class="row rowSm top-buffer">
      <div class="col-5 secondaryColor"> this where you can search for vendors </div>
      <div class="col-2"></div>
      <div class="col-2">Apt. Date</div>
      <div class="col-1"></div>
      <div class="col-2">Apt. Time</div>
    </div>

    <div class="row rowSm">
      <div class="col-5 secondaryColor"></div>
      <div class="col-2"></div>
      <textarea class="col-1 secondaryColor"></textarea>
      <div class="col-2"></div>
      <textarea class="col-1 secondaryColor"></textarea>
    </div>

    <div class="row rowSm top-buffer">
      <div class="col-5 secondaryColor"></div>
      <div class="col-2"></div>
      <div class="col-2">Bid Estimate</div>
      <div class="col-1"></div>
      <button onclick="window.location.href='./landing.php';" class="col-2 btn mainYllw">Update Request</button>
    </div>

    <div class="row rowSm">
      <div class="col-5 secondaryColor"></div>
      <div class="col-2"></div>
      <textarea class="col-1 secondaryColor"></textarea>
    </div>










  </div>
</body>
</html>