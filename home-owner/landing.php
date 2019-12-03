<?php
  require('../abs/navBar.php');
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

  <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<!-- //accent color #f2cf33 -->
<!-- //main color  #7dc9b5 -->
<body>
<?php
  $path = "../abs/media/logo.jpg";
  print_home_owner_navbar($path);
?>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">HO Landing Page</h1>
      <p class="lead">This is the landing page for a homeowner in our HOA app</p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <button class="col btn btn-lg bg-primary"> content
      </button>
    </div>

    <div class="row">
      <button class="col btn btn-lg border-top bg-primary">content</button>
    </div>

    <div class="row">
      <div class="col">.</div>
    </div>

    <div class="row">
      <button onclick="window.location.href='./receivedRequests.php';" class="col-sm btn-lg btn bg-primary">Received Requests</button>
      <div class="col-sm-1"></div>
      <button onclick="window.location.href='./newRequest.php';" class="col-sm btn btn-lg bg-primary">New Request</button>
    </div>
  </div>

</body>
</html>