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

  <title>HOA HomeOwner Page</title>

  <script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../js/script.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/styles.css">

  
</head>
<!-- //accent color #f2cf33 -->
<!-- //main color  #7dc9b5 -->
<body>
  <?php
  $image_path = "../abs/media/logo.jpg";
  print_home_owner_navbar($image_path, $filename);
  ?>

  <div class="jumbotron jumbotron-fluid secondaryYllw">
    <div class="container">
      <h1 class="display-4">Welcome, Dan!</h1>
      <h3 class= "display" >Apartment number: B47 </h3>
      <p class="lead">Below you can see the status of your most recent request, create a new request, or see previous maintenance requests you have sumbmitted. </p>
    </div>
  </div>
  <div class="container">
    
    <div class="row h1 jumboBG">
      Live Update Of Request : Pending    
    </div>

    <div class="row h2 secondaryColor">
      Appointment Date: TBD
    </div>

    <div class="row h2 secondaryColor">
      Appointment Time: TBD
    </div>

    <div class="row h2 secondaryColor">
      Vendor Assigned: TBD
    </div>


    <div class="row top-buffer mainBlue">
      <div class="col"> <h2>New Request:</h2></div>
      <div class="col-1"></div>
      <div class="col"> <h2>Previous Requests:</h2></div>
    </div>

    <div class="row">
      <div class="col"> <p>Submit a new maintenance request</p></div>
      <div class="col-1"></div>
      <button onclick="window.location.href='./newRequest.php';" class="col btn-sm btn jumboYllw">New Request</button>
      <div class="col-1"></div>

    <div class="row">
      <div class="col"><p> Take a look at previous maintenance requests</p></div>
      <div class="col-1"></div>
      <button onclick="window.location.href='./receivedRequests.php';" class="col btn-sm btn jumboYllw">Received Requests</button>
      <div class="col-1"></div>

  </body>
  </html>

<!-- 
<button onclick="window.location.href='./receivedRequests.php';" class="col btn-lg btn bg-primary">New Request</button>
      <div class="col-1"></div>
      <button onclick="window.location.href='./newRequest.php';" class="col btn btn-lg bg-primary">Previous Requests</button> -->