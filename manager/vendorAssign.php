<?php
  require('../abs/navBar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <title>Manager Edit Request</title>

  <script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../js/script.js"></script>

  <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/styles.css">

  <style type="text/css">

    .top-buffer{margin-top: 20px;}

    .row{height: 60px;}

    .headerFont{font-size: 30px;}

  </style>
</head>
<!-- //accent color #f2cf33 -->
<!-- //main color  #7dc9b5 -->
<body>
<?php
  $path = "../abs/media/logo.jpg";
  print_manager_navbar($path);
?>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Manager Assign Vendor</h1>
      <p class="lead">This is the page for a manager to assign a vendor to a request ticket</p>
    </div>
  </div>
  <div class="container">

    <div class="row">
      <div class="col-6 border headerFont"> Homeowner Request Information</div>
    </div>

    <div class="row top-buffer">
      <div class="col-3 border bg-light"> Ticket #1234 </div>
    </div>




  </div>
</body>
</html>
