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

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Contact</h1>
        <p class="lead">Have any questions or concerns around the building? Feel free to contact us!</p>
      </div>
    </div>
    <div class="container">

      <h1> Manager: Jane Doe </h1>
           <h2> 805.234.5567 </h2>

      <h1> Managing Comany: HOA Inc. </h1>
           <h2> 1.800.334.3322 </h2>

      <h1> Board Members:  </h1>
           <h2> 805.234.5567 </h2>