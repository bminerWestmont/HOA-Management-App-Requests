<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title>HOA Manager Page</title>

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
				<a class="nav-item nav-link" href="#">NEW REQUEST</a>
				<a class="nav-item nav-link" href="#">RECEIVED REQUESTS</a>
				<a class="nav-item nav-link" href="#">BUILDING MAINTENANCE</a>
				<a class="nav-item nav-link" href="#">CALENDAR</a>
				<a class="nav-item nav-link" href="#">CONTACT</a>

			</div>
		</div>
	</nav>
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">HO Manager Langing Page</h1>
			<p class="lead">This is the landing page for a manager in our HOA app</p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<!-- <div class="col border bg-primary">Overdue requests</div> -->
			<div class="col-md-5">
				<div class="card">
					<div class="card-header">
						Overdue requests
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><span class="title">Toilet overflowed</span><span class="user text-muted">Mary H. #102</span><div class="ticket-num text-muted">Ticket #42069</div></li>
						<li class="list-group-item"><span class="title">Light in hallway flickering</span><span class="user text-muted">John B. #219</span><div class="ticket-num text-muted">Ticket #69420</div></li>
						<li class="list-group-item"><span class="title">Pool filter not working</span><span class="user text-muted">Frank C. #157</span><div class="ticket-num text-muted">Ticket #11111</div></li>
					</ul>
				</div>
			</div>
			<div class="col-md-5">
				<div class="card">
					<div class="card-header">
						Today's Maintenance
					</div>
					<ul class="list-group list-group-flush">
						<li onclick="location.href = #"class="list-group-item"><span class="title">Toilet overflowed</span><span class="user text-muted">Mary H. #102</span><div class="ticket-num text-muted">Ticket #42069</div></li>
						<li class="list-group-item"><span class="title">Light in hallway flickering</span><span class="user text-muted">John B. #219</span><div class="ticket-num text-muted">Ticket #69420</div></li>
						<li class="list-group-item"><span class="title">Pool filter not working</span><span class="user text-muted">Frank C. #157</span><div class="ticket-num text-muted">Ticket #11111</div></li>
					</ul>
				</div>
			</div>
		</div>


	<!--	<div class="row">
			<button class="col border btn"></button>
			<div class="col-sm-2"></div>
			<div class="col border">all the maintenance</div>
		</div>
		<div class="row">
			<button class="col border btn">"  "</button>
			<div class="col-sm-2"></div>
			<div class="col border ">happening in the building</div>
		</div>
		<div class="row">
			<button class="col border btn">"   "</button>
			<div class="col-sm-2"></div>
			<div class="col border">today</div>
		</div>
-->
	</div>


</body>
</html>