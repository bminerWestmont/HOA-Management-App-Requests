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


    <title>HOA Confirmed submit page</title>

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
  print_manager_navbar($image_path, $filename);
?>

<div class="jumbotron jumbotron-fluid ">
    <div class="container">
        <h1 class="display-4">The Homeowner has been notified of your changes.</h1>
        <p> Ticket Number: 33467 </p>
        <h1>An email was sent to the Homeowner regarding your changes to their request. </h1>

    </div>
</div>

<<div class="row">
        <a  href="./landing.php" class="col-sm btn btn-lg secondaryColor" href="./receivedRequests.php">Go Home</a> </div>




</body>
</html>
