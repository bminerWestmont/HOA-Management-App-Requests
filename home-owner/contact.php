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

    <title>HOA Home-Owner Contact</title>

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
  print_home_owner_navbar($image_path, $filename);
?>

    <div class="jumbotron jumbotron-fluid secondaryYllw">
      <div class="container">
        <h1 class="display-4">Contact</h1>
        <p class="lead">Have any questions or concerns around the building? Feel free to contact us!</p>
      </div>
    </div>
    <div class="container">

      <h1> Manager:  </h1> <h2> Jane Doe </h2>
           <h3> 805.234.5567 </h3>

      <h1> Managing Comany: </h1> <h2> HOA Inc. </h2>
           <h3> 1.800.334.3322 </h3>
      <h1> Board Members: </h1>
      <h2>  Lisa Dotson </h2>
           <h3> 805.234.5567 </h3>
           <h2>  Greg Yegerd </h2>
           <h3> 805.221.1223 </h3>
            <h2> Arnaldi Cofefe </h2>
           <h3> 542.112.4567 </h3>

