<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Received Requests</title>

    <script type="text/javascript" src="../../node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>

    <link rel="stylesheet" type="text/css" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="../node_modules/@fortawesome/fontawesome-free/css/all.css"> -->
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
  </head>
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
  				<a class="nav-item nav-link" href="../index.php">HOME <span class="sr-only">(current)</span></a>
  				<a class="nav-item nav-link" href="#">NEW REQUEST</a>
  				<a class="nav-item nav-link active" href="#">RECEIVED REQUESTS</a>
  				<a class="nav-item nav-link" href="#">BUILDING MAINTENANCE</a>
  				<a class="nav-item nav-link" href="#">CALENDAR</a>
  				<a class="nav-item nav-link" href="#">CONTACT</a>

  			</div>
  		</div>
  	</nav>

  	<div class="jumbotron jumbotron-fluid">
  		<div class="container">
  			<h1 class="display-4">HO Requests</h1>
  			<p class="lead">This is the requests page for a homeowner in our HOA app</p>
  		</div>
  	</div>


  	<div class="container">
  		<div class="row">
  			<div class="col border">ALL RECEIVED REQUESTS</div>
  			<div class="col-sm-3 border">STATUS</div>
  			<div class="col-sm-4 border">DATE FULFILLED</div>			
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