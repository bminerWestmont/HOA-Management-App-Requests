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

	<title>HOA Manager Page</title>

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
			<h1 class="display-4">Welcome Back, Jane.</h1>
			<p class="lead">Below are the most recent requests that have come in as well as all the maintancence that is happening in the building today. </p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<!-- <div class="col border bg-primary">Overdue requests</div> -->
			<div class="col-md-5 padding-bottom">
				<div class="card">
					<div class="card-header jumboBG">
						Open Requests
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><span class="title">Toilet overflowed     </span><span class="user text-muted">Mary H. #F102</span><div class="ticket-num text-muted">Ticket #42069</div></li>
						<li class="list-group-item"><span class="title">Light in hallway flickering    </span><span class="user text-muted">John B. #C219</span><div class="ticket-num text-muted">Ticket #69420</div></li>
						<li class="list-group-item"><span class="title">Pool filter not working   </span><span class="user text-muted">Frank C. #A157</span><div class="ticket-num text-muted">Ticket #11111</div></li>
					</ul>
					<button onclick="window.location.href='./manageRequests.php';" class="col btn-sm btn jumboBG">Go to Page --></button>
      <div class="col-1"></div>
				</div>
			</div>
			<div class="col-md-5 padding-bottom ">
				<div class="card">
					<div class="card-header jumboYllw padding-bottom">
						Today's Schedule
					</div>
					<ul class="list-group list-group-flush">
						<li onclick="location.href = #"class="list-group-item"><span class="title">Light fixture fix  </span><span class="user text-muted">Ellen Q. #b322</span><div class="ticket-num text-muted">Ticket #69422</div></li>
						<li class="list-group-item"><span class="title">Plummer fixing pipes  </span><span class="user text-muted">General Building  </span><div class="ticket-num text-muted">Ticket #77712</div></li>
						<li class="list-group-item"><span class="title">Fix outside gate  </span><span class="user text-muted">David D. #A764</span><div class="ticket-num text-muted">Ticket #10076</div></li>
					</ul>
					<button onclick="window.location.href='./todaysSchedule.php';" class="col btn-sm btn jumboYllw">Go to Page --></button>
      <div class="col-1"></div>
				</div>
			</div>
		</div>
		<br>
		<br>
		<br>


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