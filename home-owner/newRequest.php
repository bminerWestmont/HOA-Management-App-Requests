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

  <title>HOA HomeOwner Page</title>

  <script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="./js/script.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
  <?php
  $image_path = "../abs/media/logo.jpg";
  print_home_owner_navbar($image_path, $filename);
  ?>

  <div class="jumbotron jumbotron-fluid secondaryYllw">
    <div class="container">
      <h1 class="display-4">New Request</h1>
      <p class="lead">If you have any maintenance requests, fixes, or general concerns about the building safety, please fill out this request form.</p>
    </div>
  </div>





  <h1> New Request </h1>




  <div class="container">

    <div class="row">


      <div class="form-group">
        <label for="exampleFormControlSelect1">Type:</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Plumbing</option>
          <option>Electrical</option>
          <option>Treescaping</option>
          <option>Wall / ground repair</option>
          <option>Pest control</option>
        </select>
      </div>


    </div>






    <div class="form-group">
      <label for="exampleFormControlTextarea1"> <br>Description</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>





    <div class="container">

      <div class="row">


        <div class="form-group">
          <label for="exampleFormControlSelect1">Where:</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>In my appartment</option>
            <option>In the hall</option>
            <option>By the pool</option>
            <option>Front entryway</option>
            <option>Other</option>
          </select>
        </div>


      </div>

    </div>





    <div class="container">

      <div class="row">


       <div class="form-group">
        <label for="exampleFormControlSelect1"> <br>Urgency:</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Very urgent</option>
          <option>Somewhat urgent</option>
          <option>Not very urgent</option>
        </select>
      </div>



      <form>
        <div class="form-group">
          <label for="exampleFormControlFile1"> <br>Upload Images</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
      </form>


    </div>

  </div>

<br>
<br>


<button type="button" onclick="window.location.href = 'confirmedRequest.php';" >Submit</button>










</body>
</html>
