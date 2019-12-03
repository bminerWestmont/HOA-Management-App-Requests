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

  <title>Received Requests</title>

  <script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../js/script.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
<?php
  $image_path = "../abs/media/logo.jpg";
  print_home_owner_navbar($image_path, $filename);
?>

 <div class="jumbotron jumbotron-fluid secondaryYllw">
  <div class="container">
   <h1 class="display-4">Previously Submitted Requests</h1>
   <p class="lead">Below you will find all of your previously submitted requests that have been fulfilled or are in the proccess of being finished. </p>
 </div>
</div>


<div class="container">
  <div class="row">
   <div class="col border jumboBG">ALL RECEIVED REQUESTS</div>
   <div class="col-sm-3 border jumboBG">STATUS</div>
   <div class="col-sm-4 border jumboBG">DATE FULFILLED</div>			
 </div>
 <div class="row">
   <div class="col border">request details</div>
   <div class="col-sm-3 border">pending</div>
   <div class="col-sm-4 border">TBD</div>
 </div>
 <div class="row">
   <div class="col border">request details</div>
   <div class="col-sm-3 border">pending</div>
   <div class="col-sm-4 border">TBD</div>
 </div>
 <div class="row">
   <div class="col border">request details</div>
   <div class="col-sm-3 border">pending</div>
   <div class="col-sm-4 border">TBD</div>
 </div>
</div>
</body>
</html>