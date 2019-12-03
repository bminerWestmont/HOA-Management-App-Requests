<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <title>HOA HomeOwner Page</title>

  <script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="./js/script.js"></script>

  <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/styles.css">
</head>
<!-- //accent color #f2cf33 -->
<!-- //main color  #7dc9b5 -->
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">  
      <img src="/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" alt=""> <!-- What is this image trying to point to? this url does not exist in this directory... -->
    </a></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#">HOME <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="./requests/index.php">NEW REQUEST</a>
        <a class="nav-item nav-link" href="./ReceivedRequests/index.php">RECEIVED REQUESTS</a>
        <a class="nav-item nav-link" href="#">BUILDING MAINTENANCE</a>
        <a class="nav-item nav-link" href="#">CALENDAR</a>
        <a class="nav-item nav-link" href="./contact/index.php">CONTACT</a>

      </div>
    </div>
  </nav>

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
      <button onclick="window.location.href='./ReceivedRequests/index.php';" class="col-sm btn-lg btn bg-primary">Received Requests</button>
      <div class="col-sm-1"></div>
      <button onclick="window.location.href='./requests/index.php';" class="col-sm btn btn-lg bg-primary">New Request</button>
    </div>
  </div>

</body>
</html>