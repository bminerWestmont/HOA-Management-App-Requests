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

  <title>Manager Today's Schedule</title>

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
      <h1 class="display-4">Open Requests </h1>
      <p class="lead">Here's everything that hasn't been fulfilled yet.</p>
    </div>
  </div>


  <div class="container">
    

    <div class="row">
     <div class="col-sm-8">
      <input type="text" placeholder="Search..">
     </div>
     <div class="col-sm-4">
      <button type="submit">Submit</button>
    </div>  
   </div>

   <br>

   <div class="row">
     <div class="col-sm-6">
       <div class="form-group">
          <input type="text" placeholder="Date..">
        </div>
     </div>
     <div class="col-sm-6">
       <div class="form-group">
          <select class="form-control" id="exampleFormControlSelect1">
            <option>Pending</option>
            <option> In progress</option>
            <option> Seen </option>
            <option>Completed</option>
          </select>
        </div>
     </div>
   </div>

    <div class="row">
      <div class="col border secondaryColor text-center">MOST RECENT UNFULFILLED REQUESTS</div>
    </div>

    <div class="row">
     <div class="col-sm-2 border  ">Ticket Number</div>
     <div class="col-sm-2 border ">Title</div>
     <div class="col-sm-2 border ">Resident</div>
     <div class="col-sm-2 border ">Date Requested</div>  
     <div class="col-sm-2 border ">Location</div>
     <div class="col-sm-2 border ">Status</div>  
   </div>
   <div class="row">
     <div class="col-sm-2 border">69422</div>
     <div class="col-sm-2 border">Light Fixture Fix</div>
     <div class="col-sm-2 border">Ellen Q.</div>
     <div class="col-sm-2 border">12/1/19</div>  
     <div class="col-sm-2 border">B322</div>
     <div class="col-sm-2 border">Pending  <br> 
      <button onclick="window.location.href='./manageRequests.php';" class="col btn-sm btn jumboYllw">Go to Request</button>
      </div> 
      <br>

   </div>
   <div class="row">
     <div class="col-sm-2 border">77712</div>
     <div class="col-sm-2 border">Plummer fixing pipes</div>
     <div class="col-sm-2 border">Mark Q.</div>
     <div class="col-sm-2 border">12/2/19</div>  
     <div class="col-sm-2 border">General Building</div>
     <div class="col-sm-2 border">Pending  <br> 
      <button onclick="window.location.href='./manageRequests.php';" class="col btn-sm btn jumboYllw">Go to Request</button></div>  
   </div>
   <div class="row">
     <div class="col-sm-2 border">10076</div>
     <div class="col-sm-2 border">Fix Outside Gate</div>
     <div class="col-sm-2 border">HOA Board</div>
     <div class="col-sm-2 border">11/20/19</div>  
     <div class="col-sm-2 border">Back Entrance</div>
     <div class="col-sm-2 border">Finding Operators <br> 
      <button onclick="window.location.href='./manageRequests.php';" class="col btn-sm btn jumboYllw">Go to Request</button></div>  
   </div>


 </div>