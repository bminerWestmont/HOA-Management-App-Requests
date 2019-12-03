<?php
  require('../abs/navBar.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


    <title>HOA Home-Owner Page</title>

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
  print_home_owner_navbar($image_path, $current_url);
?>

<div class="jumbotron jumbotron-fluid jumboBG">
    <div class="container">
        <h1 class="display-4">We have received your request!</h1>
        <p class="lead"> !!!  </p>
    </div>
</div>

<h1> Request Recieved! Management will get right on it and notify you when we have begun working on your request. </h1>

<<div class="row">
        <a  href="../landing.php" class="col-sm btn btn-lg bg-primary" href="./receivedRequests.php">Go Home</a>
<div class="col-sm-1"></div>




</body>
</html>
