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
      <h1 class="display-4">Today's Schedule </h1>
      <p class="lead">Here's everything going on in the building today.</p>
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
          <select class="form-control" id="exampleFormControlSelect1">
            <option>Today</option>
            <option>option 2</option>
            <option>option 3</option>
            <option>option 4</option>
            <option>option 5</option>
          </select>
        </div>
     </div>
     <div class="col-sm-6">
       <div class="form-group">
          <select class="form-control" id="exampleFormControlSelect1">
            <option>In Progress</option>
            <option>option 2</option>
            <option>option 3</option>
            <option>option 4</option>
            <option>option 5</option>
          </select>
        </div>
     </div>
   </div>

    <div class="row">
      <div class="col border jumboBG text-center">ALL RECEIVED REQUESTS</div>
    </div>

    <div class="row">
     <div class="col-sm-2 border jumboBG">Ticket Number</div>
     <div class="col-sm-2 border jumboBG">Title</div>
     <div class="col-sm-2 border jumboBG">Resident</div>
     <div class="col-sm-2 border jumboBG">Date Requested</div>  
     <div class="col-sm-2 border jumboBG">Location</div>
     <div class="col-sm-2 border jumboBG">Status</div>  
   </div>
   <div class="row">
     <div class="col-sm-2 border">69422</div>
     <div class="col-sm-2 border">Light Fixture Fix</div>
     <div class="col-sm-2 border">Ellen Q.</div>
     <div class="col-sm-2 border">12/1/19</div>  
     <div class="col-sm-2 border">B322</div>
     <div class="col-sm-2 border">Doing work today</div>  
   </div>
   <div class="row">
     <div class="col-sm-2 border">77712</div>
     <div class="col-sm-2 border">Plummer fixing pipes</div>
     <div class="col-sm-2 border">Mark Q.</div>
     <div class="col-sm-2 border">12/2/19</div>  
     <div class="col-sm-2 border">General Building</div>
     <div class="col-sm-2 border">Doing Work Today</div>  
   </div>
   <div class="row">
     <div class="col-sm-2 border">10076</div>
     <div class="col-sm-2 border">Fix Outside Gate</div>
     <div class="col-sm-2 border">HOA Board</div>
     <div class="col-sm-2 border">11/20/19</div>  
     <div class="col-sm-2 border">Back Entrance</div>
     <div class="col-sm-2 border">Finding Operators</div>  
   </div>


 </div>